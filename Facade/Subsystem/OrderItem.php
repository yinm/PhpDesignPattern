<?php
namespace PhpDesignPattern\Facade\Subsystem;

/**
 * 2nd
 *
 * Class OrderItem
 * @package PhpDesignPattern\Facade\Subsystem
 */
class OrderItem
{
    private $item;
    private $amount;

    public function __construct(Item $item, $amount)
    {
        $this->item = $item;
        $this->amount = $amount;
    }

    public function getItem()
    {
        return $this->item;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}