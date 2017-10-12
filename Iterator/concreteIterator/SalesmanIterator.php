<?php
namespace PhpDesignPattern\Iterator\ConcreteIterator;

use Iterator;

/**
 * 2nd
 *
 * Class SalesmanIterator
 * @package PhpDesignPattern\Iterator\ConcreteIterator
 */
class SalesmanIterator extends \FilterIterator
{
    public function __construct(Iterator $iterator)
    {
        parent::__construct($iterator);
    }

    public function accept()
    {
        $employee = $this->getInnerIterator()->current();
        return ($employee->getJob() === 'SALESMAN');
    }
}