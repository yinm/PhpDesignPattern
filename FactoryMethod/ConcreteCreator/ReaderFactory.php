<?php
namespace PhpDesignPattern\FactoryMethod\ConcreteCreator;

use PhpDesignPattern\FactoryMethod\Product\Reader;
use PhpDesignPattern\FactoryMethod\ConcreteProduct\TextFileReader;
use PhpDesignPattern\FactoryMethod\ConcreteProduct\XMLFileReader;

class ReaderFactory
{
    public function create($filename)
    {
        $reader = $this->createReader($filename);
        return $reader;
    }

    private function createReader($filename)
    {
        $posTxt = stripos($filename, '.txt');
        $posXml = stripos($filename, '.xml');

        if ($posTxt !== false) {
            $r = new TextFileReader($filename);
            return $r;

        } elseif ($posXml !== false) {
            return new XMLFileReader($filename);

        } else {
            die('This filename is not supported : ' . $filename);
        }
    }
}
