<?php
namespace PhpDesignPattern\FactoryMethod\ConcreteProduct;

use PhpDesignPattern\FactoryMethod\Product\Reader;

class XMLFileReader implements Reader
{
    private $filename;
    private $handler;

    public function __construct($filename)
    {
        if (! is_readable($filename)) {
            throw new \Exception('file ' . $filename . ' is not readable !');
        }
        $this->filename = $filename;
    }

    public function read()
    {
        $this->handler = simplexml_load_file($this->filename);
    }

    public function display()
    {
        foreach ($this->handler->artist as $artist) {
            echo $artist['name'] . PHP_EOL;
            foreach ($artist->music as $music) {
                printf('-->%s%s', $music['name'], PHP_EOL);
            }
        }
    }
}
