<?php
namespace PhpDesignPattern\AbstractFactory\ConcreteFactory;

use PhpDesignPattern\AbstractFactory\AbstractFactory\DaoFactory;
use PhpDesignPattern\AbstractFactory\ConcreteProduct\MockItemDao;
use PhpDesignPattern\AbstractFactory\ConcreteProduct\MockOrderDao;

class MockFactory implements DaoFactory
{
    public function createItemDao()
    {
        return new MockItemDao();
    }

    public function createOrderDao()
    {
        return new MockOrderDao();
    }
}
