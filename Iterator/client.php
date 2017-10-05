<?php
namespace PhpDesignPattern\Iterator;

require dirname(__DIR__) . '/vendor/autoload.php';

use PhpDesignPattern\Iterator\Model\Employee;
use PhpDesignPattern\Iterator\ConcreteAggregate\Employees;
use PhpDesignPattern\Iterator\ConcreteIterator\SalesmanIterator;

function dumpWithForeach(\Iterator $iterator)
{
    foreach ($iterator as $employee) {
        printf(
            '%s (%d, %s)%s',
            $employee->getName(),
            $employee->getAge(),
            $employee->getJob(),
            PHP_EOL
        );
    }
}

$employees = new Employees();
$employees->add(new Employee('SMITH', 32, 'CLERK'));
$employees->add(new Employee('ALLEN', 26, 'SALESMAN'));
$employees->add(new Employee('MARTIN', 50, 'SALESMAN'));
$employees->add(new Employee('CLARK', 45, 'MANAGER'));
$employees->add(new Employee('KING', 58, 'PRESIDENT'));

$iterator = $employees->getIterator();


echo '*Iteratorのメソッドを利用する' . PHP_EOL;
while ($iterator->valid()) {
    $employee = $iterator->current();
    printf(
        '%s (%d, %s)%s',
        $employee->getName(),
        $employee->getAge(),
        $employee->getJob(),
        PHP_EOL
    );

    $iterator->next();
}

echo '*foreach文を利用する' . PHP_EOL;
dumpWithForeach($iterator);

echo '*異なるiteratorで要素を取得する' . PHP_EOL;
dumpWithForeach(new SalesmanIterator($iterator));