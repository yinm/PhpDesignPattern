<?php
namespace PhpDesignPattern\TemplateMethod\ConcreteClass;

use PhpDesignPattern\TemplateMethod\AbstractClass\AbstractDisplay;

class ListDisplay extends AbstractDisplay
{
    protected function displayHeader()
    {
        echo 'データ一致' . PHP_EOL;
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
