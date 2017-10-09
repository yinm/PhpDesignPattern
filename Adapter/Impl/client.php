<?php
namespace PhpDesignPattern\Adapter\Impl;

require dirname(dirname(__DIR__)) . '/vendor/autoload.php';

use PhpDesignPattern\Adapter\Impl\Adapter\DisplaySourceFileImpl;

/**
 * 2nd
 */
$showFile = new DisplaySourceFileImpl(dirname(__DIR__) . '/ShowFile.php');
$showFile->display();