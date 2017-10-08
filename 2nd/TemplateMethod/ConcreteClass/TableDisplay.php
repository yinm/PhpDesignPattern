<?php
namespace PhpDesignPattern\Second\TemplateMethod\ConcreteClass;

use PhpDesignPattern\Second\TemplateMethod\AbstractClass\AbstractDisplay;

class TableDisplay extends AbstractDisplay
{
    protected function displayHeader()
    {
        $this->displayLine();
        echo "キー\t個" . PHP_EOL;
        $this->displayLine();
    }

    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            printf("%s\t%s%s", $key, $value, PHP_EOL);
        }
    }

    protected function displayFooter()
    {
        $this->displayLine();
    }

    private function displayLine()
    {
        echo str_repeat('-', 40) . PHP_EOL;
    }
}