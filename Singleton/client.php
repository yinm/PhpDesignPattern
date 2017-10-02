<?php
namespace PhpDesignPattern\Singleton;

require dirname(__DIR__) . '/vendor/autoload.php';

use PhpDesignPattern\Singleton\Singleton\SingletonSample;

$instance1 = SingletonSample::getInstance();
sleep(1);
$instance2 = SingletonSample::getInstance();

echo '<hr>';

echo 'instance ID : ' . $instance1->getId() . '<br>';
echo '$instance1->getId() === $instance2->getId() : ' . ($instance1->getId() === $instance2->getId() ? 'true' : 'false');
echo '<hr>';

echo '$instance1 === $instance2 : ' . ($instance1 === $instance2 ? 'true' : 'false');
echo '<hr>';

$instance1_clone = clone $instance1;