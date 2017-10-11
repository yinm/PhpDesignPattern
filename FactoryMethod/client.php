<?php
namespace PhpDesignPattern\FactoryMethod;

require dirname(__DIR__) . '/vendor/autoload.php';

use PhpDesignPattern\FactoryMethod\ConcreteCreator\ReaderFactory;

function show($filename)
{
    echo $filename . PHP_EOL;

    $factory = new ReaderFactory();
    $data = $factory->create($filename);
    $data->read();
    $data->display();
}

show(__DIR__ . '/music.txt');
show(__DIR__ . '/music.xml');