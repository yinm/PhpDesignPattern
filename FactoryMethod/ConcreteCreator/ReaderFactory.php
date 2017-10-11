<?php
namespace PhpDesignPattern\FactoryMethod\ConcreteCreator;

use PhpDesignPattern\FactoryMethod\ConcreteProduct\TextFileReader;
use PhpDesignPattern\FactoryMethod\ConcreteProduct\XMLFileReader;

/**
 * 2nd
 *
 * Class ReaderFactory
 * @package PhpDesignPattern\FactoryMethod\ConcreteCreator
 */
class ReaderFactory
{
    public function create($filename)
    {
        return $this->createReader($filename);
    }

    private function createReader($filename)
    {
        $posTxt = stripos($filename, '.txt');
        $posXml = stripos($filename, '.xml');

        if ($posTxt !== false) {
            return new TextFileReader($filename);
        } elseif ($posXml !== false) {
            return new XMLFileReader($filename);
        } else {
            die('This filename is not supported : ' . $filename);
        }
    }
}