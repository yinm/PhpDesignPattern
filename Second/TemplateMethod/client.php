<?php
namespace PhpDesignPattern\Second\TemplateMethod;

require dirname(dirname(__DIR__)) . '/vendor/autoload.php';

use PhpDesignPattern\Second\TemplateMethod\ConcreteClass\ListDisplay;
use PhpDesignPattern\Second\TemplateMethod\ConcreteClass\TableDisplay;

$data = array(
    'Design Pattern',
    'Gang of Four',
    'Template Method Sample1',
    'Template Method Sample2',
);

$display = new ListDisplay($data);
$display->display();

$display = new TableDisplay($data);
$display->display();
