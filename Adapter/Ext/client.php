<?php
namespace PhpDesignPattern\Adapter\Ext;

require dirname(dirname(__DIR__)) . '/vendor/autoload.php';

use PhpDesignPattern\Adapter\Ext\Adapter\DisplaySourceFileImpl;

/**
 * 2nd
 */
$showFile = new DisplaySourceFileImpl(dirname(__DIR__) . '/ShowFile.php');
$showFile->display();