<?php
namespace PhpDesignPattern\Iterator\ConcreteAggregate;

use PhpDesignPattern\Iterator\Model\Employee;

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