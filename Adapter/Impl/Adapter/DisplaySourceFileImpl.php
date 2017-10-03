<?php
namespace PhpDesignPattern\Adapter\Impl\Adapter;

use PhpDesignPattern\Adapter\Impl\Target\DisplaySourceFile;
use PhpDesignPattern\Adapter\ShowFile;

class DisplaySourceFileImpl implements DisplaySourceFile
{
    private $showFile;

    public function __construct($filename)
    {
        $this->showFile = new ShowFile($filename);
    }

    public function display()
    {
        $this->showFile->showHighlight();
    }
}