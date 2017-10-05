<?php
namespace PhpDesignPattern\FactoryMethod\ConcreteProduct;

use PhpDesignPattern\FactoryMethod\Product\Reader;

class TextFileReader implements Reader
{
    private $filename;
    private $handler;

    public function __construct($filename)
    {
        if (! is_readable($filename)) {
            throw new \Exception('file [' . $filename . '] is not readable !');
        }
        $this->filename = $filename;
    }

    public function read()
    {
        $this->handler = fopen($this->filename, 'r');
    }

    public function display()
    {
        $prevArtist = null;
        $titles = [];

        while (($buffer = fgets($this->handler, 4096)) !== false) {
            $data = explode("\t", trim($buffer));
            if (count($data) !== 2) {
                continue;
            }

            list($artist, $title) = $data;
            if (is_null($prevArtist)) {
                $prevArtist = $artist;
            }
            if ($artist !== $prevArtist) {
                $this->displayDetail($prevArtist, $titles);

                $prevArtist = $artist;
                $titles = [];
            }
            $titles[] = $title;
        }

        if (count($titles) > 0) {
            $this->displayDetail($prevArtist, $titles);
        }
    }

    private function displayDetail($artist, array $titles = [])
    {
        printf('%s%s', $artist, PHP_EOL);
        printf(
            '-->%s%s',
            implode(PHP_EOL . '-->', $titles),
            count($titles) > 0 ? PHP_EOL : null
        );
    }
}
