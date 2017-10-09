<?php
namespace PhpDesignPattern\Singleton;

require dirname(__DIR__) . '/vendor/autoload.php';

use PhpDesignPattern\Singleton\Singleton\SingletonSample;

$instance1 = SingletonSample::getInstance();
$instance2 = SingletonSample::getInstance();

echo 'instance Id : ' . $instance1->getId() . PHP_EOL;
echo '$instance1->getId() === $instance2->getId() : '
     . ($instance1->getId() === $instance2->getId() ? 'true' : 'false');
echo PHP_EOL;

echo '$instance1 === $instance2 : ' . ($instance1 === $instance2 ? 'true' : 'false');
echo PHP_EOL;

try {
    $instance1_clone = clone $instance1;
} catch (\RuntimeException $e) {
    echo $e->getMessage() . PHP_EOL;
}
