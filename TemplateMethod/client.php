<?php
namespace PhpDesignPattern\TemplateMethod;

require dirname(__DIR__) . '/vendor/autoload.php';

use PhpDesignPattern\TemplateMethod\ConcreteClass\ListDisplay;
use PhpDesignPattern\TemplateMethod\ConcreteClass\TableDisplay;

$data = [
    'Design Pattern',
    'Gang of Four',
    'Template Method Sample1',
    'Template Method Smaple2'
];

$display = new ListDisplay($data);
$display->display();

$display = new TableDisplay($data);
$display->display();
