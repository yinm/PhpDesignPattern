<?php
namespace PhpDesignPattern\Adapter\Ext\Adapter;

use PhpDesignPattern\Adapter\Ext\Target\DisplaySourceFile;
use PhpDesignPattern\Adapter\ShowFile;

/**
 * Adaptee: ShowFile
 * Target: DisplaySourceFile
 */
class DisplaySourceFileImpl extends ShowFile implements DisplaySourceFile
{
    public function __construct($filename)
    {
        parent::__construct($filename);
    }

    public function display()
    {
        parent::showHighlight();
    }
}