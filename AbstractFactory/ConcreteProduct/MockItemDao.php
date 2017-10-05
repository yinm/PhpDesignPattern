<?php
namespace PhpDesignPattern\AbstractFactory\ConcreteProduct;

use PhpDesignPattern\AbstractFactory\AbstractProduct\ItemDao;
use PhpDesignPattern\AbstractFactory\Model\Item;

class MockItemDao implements ItemDao
{
    public function findById($itemId)
    {
        $item = new Item('99', 'ダミー商品');
        return $item;
    }
}