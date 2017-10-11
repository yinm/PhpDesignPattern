<?php
namespace PhpDesignPattern\Facade\Subsystem;

/**
 * 2nd
 *
 * Class OrderDao
 * @package PhpDesignPattern\Facade\Subsystem
 */
class OrderDao
{
    public static function createOrder(Order $order)
    {
        echo '以下の内容で注文データを作成しました' . PHP_EOL;

        echo   "商品番号\t"
             . "商品名\t"
             . "単価\t"
             . "数量\t"
             . "金額\t"
             . PHP_EOL;

        foreach ($order->getItems() as $orderItem) {
            echo   $orderItem->getItem()->getId() . "\t"
                 . $orderItem->getItem()->getName() . "\t"
                 . $orderItem->getItem()->getPrice() . "\t"
                 . $orderItem->getAmount() . "\t"
                 . ($orderItem->getItem()->getPrice() * $orderItem->getAmount())
                 . PHP_EOL;
        }
    }
}