<?php
namespace PhpDesignPattern\AbstractFactory\AbstractProduct;

interface OrderDao
{
    public function findById($orderId);
}
