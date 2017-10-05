<?php
namespace PhpDesignPattern\AbstractFactory\AbstractFactory;

interface DaoFactory
{
    public function createItemDao();
    public function createOrderDao();
}