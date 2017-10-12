<?php
namespace PhpDesignPattern\Facade\Facade;

use PhpDesignPattern\Facade\Subsystem\Order;
use PhpDesignPattern\Facade\Subsystem\ItemDao;
use PhpDesignPattern\Facade\Subsystem\OrderDao;

/**
 * 2nd
 *
 * Class OrderManager
 * @package PhpDesignPattern\Facade\Facade
 */
class OrderManager
{
    public static function order(Order $order)
    {
        $itemDao = ItemDao::getInstance();
        foreach ($order->getItems() as $orderItem) {
            $itemDao->setAside($orderItem);
        }

        OrderDao::createOrder($order);
    }
}
