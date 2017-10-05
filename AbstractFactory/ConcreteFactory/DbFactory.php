<?php
namespace PhpDesignPattern\AbstractFactory\ConcreteFactory;

use PhpDesignPattern\AbstractFactory\AbstractFactory\DaoFactory;
use PhpDesignPattern\AbstractFactory\ConcreteProduct\DbItemDao;
use PhpDesignPattern\AbstractFactory\ConcreteProduct\DbOrderDao;

class DbFactory implements DaoFactory
{
    public function createItemDao()
    {
        return new DbItemDao();
    }

    public function createOrderDao()
    {
        return new DbOrderDao($this->createItemDao());
    }
}
