<?php
namespace PhpDesignPattern\AbstractFactory\AbstractProduct;

interface ItemDao
{
    public function findById($itemId);
}