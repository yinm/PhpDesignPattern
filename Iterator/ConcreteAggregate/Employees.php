<?php
namespace PhpDesignPattern\Iterator\ConcreteAggregate;

use PhpDesignPattern\Iterator\Model\Employee;

/**
 * 2nd
 *
 * Class Employees
 * @package PhpDesignPattern\Iterator\ConcreteAggregate
 */
class Employees implements \IteratorAggregate
{
    private $employees;

    public function __construct()
    {
        $this->employees = new \ArrayObject();
    }

    public function add(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function getIterator()
    {
        return $this->employees->getIterator();
    }
}