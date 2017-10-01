<?php
namespace PhpDesignPattern\TemplateMethod\AbstractClass;

abstract class AbstractDisplay
{
    private $data;

    public function __construct($data)
    {
        if (! is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    public function display()
    {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    public function getData()
    {
        return $this->data;
    }

    abstract protected function displayHeader();
    abstract protected function displayBody();
    abstract protected function displayFooter();
}