<?php
namespace PhpDesignPattern\AbstractFactory\ConcreteProduct;

use PhpDesignPattern\AbstractFactory\AbstractProduct\ItemDao;
use PhpDesignPattern\AbstractFactory\AbstractProduct\OrderDao;
use PhpDesignPattern\AbstractFactory\Model\Order;

class DbOrderDao implements OrderDao
{
    private $orders;

    public function __construct(ItemDao $itemDao)
    {
        $fp = fopen(dirname(__DIR__) . '/order_data.txt', 'r');

        // ヘッダ行を抜く
        fgets($fp, 4096);

        $this->orders = [];
        while (($buffer = fgets($fp, 4096)) !== false) {
            $data = explode("\t", trim($buffer));
            if (count($data) !== 2) {
                continue;
            }
            list($orderId, $itemIds) = $data;

            $order = new Order($orderId);
            foreach (explode(',', $itemIds) as $itemId) {
                $item = $itemDao->findById($itemId);
                if (! is_null($item)) {
                    $order->addItem($item);
                }
            }

            $this->orders[$order->getId()] = $order;
        }

        fclose($fp);
    }

    public function findById($orderId)
    {
        if (array_key_exists($orderId, $this->orders)) {
            return $this->orders[$orderId];
        }
    }
}