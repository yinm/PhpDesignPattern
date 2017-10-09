<?php
namespace PhpDesignPattern\Adapter\Ext\Adapter;

use PhpDesignPattern\Adapter\Ext\Target\DisplaySourceFile;
use PhpDesignPattern\Adapter\ShowFile;

/**
 * 2nd
 *
 * Class DisplaySourceFileImpl
 * @package PhpDesignPattern\Adapter\Ext\Adapter
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