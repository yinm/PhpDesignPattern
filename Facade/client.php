<?php
namespace PhpDesignPattern\Facade;

require dirname(__DIR__) . '/vendor/autoload.php';

use PhpDesignPattern\Facade\Subsystem\Order;
use PhpDesignPattern\Facade\Subsystem\OrderItem;
use PhpDesignPattern\Facade\Subsystem\ItemDao;
use PhpDesignPattern\Facade\Facade\OrderManager;

$order = new Order();
$itemDao = ItemDao::getInstance();

$order->addItem(new OrderItem($itemDao->findById(1), 2));
$order->addItem(new OrderItem($itemDao->findById(2), 1));
$order->addItem(new OrderItem($itemDao->findById(3), 3));

OrderManager::order($order);
