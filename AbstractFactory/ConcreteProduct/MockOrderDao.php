<?php
namespace PhpDesignPattern\AbstractFactory\ConcreteProduct;

use PhpDesignPattern\AbstractFactory\AbstractProduct\OrderDao;
use PhpDesignPattern\AbstractFactory\Model\Item;
use PhpDesignPattern\AbstractFactory\Model\Order;

class MockOrderDao implements OrderDao
{
    public function findById($orderId)
    {
        $order = new Order('999');
        $order->addItem(new Item('99', 'ダミー商品'));
        $order->addItem(new Item('99', 'ダミー商品'));
        $order->addItem(new Item('98', 'テスト商品'));
    }
}