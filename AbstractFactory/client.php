<?php
namespace PhpDesignPattern\AbstractFactory;

require dirname(__DIR__) . '/vendor/autoload.php';

use PhpDesignPattern\AbstractFactory\AbstractFactory\DaoFactory;
use PhpDesignPattern\AbstractFactory\ConcreteFactory\DbFactory;
use PhpDesignPattern\AbstractFactory\ConcreteFactory\MockFactory;

function show(DaoFactory $factory)
{
    $itemId = 1;
    $itemDao = $factory->createItemDao();
    $item = $itemDao->findById($itemId);
    printf(
        'ID=%sの商品は「%s」です。%s',
        $itemId,
        $item->getName(),
        PHP_EOL
    );

    $orderId = 3;
    $orderDao = $factory->createOrderDao();
    $order = $orderDao->findById($orderId);
    printf(
        'ID=%sの注文情報は次の通りです。%s',
        $orderId,
        PHP_EOL
    );

    foreach ($order->getItems() as $item) {
        printf('%s%s', $item['object']->getName(), PHP_EOL);
    }
}

show(new DbFactory());
show(new MockFactory());