<?php
namespace PhpDesignPattern\TemplateMethod\ConcreteClass;

use PhpDesignPattern\TemplateMethod\AbstractClass\AbstractDisplay;

class TableDisplay extends AbstractDisplay
{
    protected function displayHeader()
    {
        $this->displayLine();
        echo "キー\t値" . PHP_EOL;
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
