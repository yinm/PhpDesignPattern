<?php
namespace PhpDesignPattern\Facade\Subsystem;

class ItemDao
{
    private static $instance;
    private $items;

    private function __construct()
    {
        $fp = fopen(dirname(__DIR__) . '/item_data.txt', 'r');

        // ヘッダ行を抜く
        fgets($fp, 4096);

        $this->items = [];
        while (($buffer = fgets($fp, 4096)) !== false) {
            $data = explode("\t", trim($buffer));
            if (count($data) !== 3) {
                continue;
            }
            list($itemId, $itemName, $itemPrice) = $data;

            $item = new Item($itemId, $itemName, $itemPrice);
            $this->items[$item->getId()] = $item;
        }

        fclose($fp);
    }

    public static function getInstance()
    {
        if (! isset(self::$instance)) {
            self::$instance = new ItemDao();
        }

        return self::$instance;
    }

    public function findById($itemId)
    {
        if (array_key_exists($itemId, $this->items)) {
            return $this->items[$itemId];
        }
    }

    public function setAside(OrderItem $orderItem)
    {
        printf('%sの在庫引当を行いました%s', $orderItem->getItem()->getName(), PHP_EOL);
    }

    final public function __clone()
    {
        throw new \RuntimeException('Clone is not allowed against' . get_class($this));
    }
}