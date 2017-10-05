<?php
namespace PhpDesignPattern\AbstractFactory\ConcreteProduct;

use PhpDesignPattern\AbstractFactory\AbstractProduct\ItemDao;
use PhpDesignPattern\AbstractFactory\Model\Item;

class DbItemDao implements ItemDao
{
    private $items;

    public function __construct()
    {
        $fp = fopen(dirname(__DIR__) . '/item_data.txt', 'r');

        // ヘッダ行を抜く
        fgets($fp, 4096);

        $this->items = [];
        while (($buffer = fgets($fp, 4096)) !== false) {
            $data = explode("\t", trim($buffer));
            if (count($data) !== 2) {
                continue;
            }
            list($itemId, $itemName) = $data;

            $item = new Item($itemId, $itemName);
            $this->items[$item->getId()] = $item;
        }

        fclose($fp);
    }

    public function findById($itemId)
    {
        if (array_key_exists($itemId, $this->items)) {
            return $this->items[$itemId];
        }
    }
}
