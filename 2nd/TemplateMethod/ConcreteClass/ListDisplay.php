<?php
namespace PhpDesignPattern\Second\TemplateMethod\ConcreteClass;

use PhpDesignPattern\Second\TemplateMethod\AbstractClass\AbstractDisplay;

class ListDisplay extends AbstractDisplay
{
    protected function displayHeader()
    {
        echo 'データ一覧' . PHP_EOL;
    }

    protected function displayBody()
    {
        foreach ($this->getData() as $value) {
            echo $value . PHP_EOL;
        }
    }

    protected function displayFooter()
    {
        // do nothing
    }
}