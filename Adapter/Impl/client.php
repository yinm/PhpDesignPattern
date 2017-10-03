<?php
namespace PhpDesignPattern\Adapter\Impl;

require dirname(dirname(__DIR__)) . '/vendor/autoload.php';

use PhpDesignPattern\Adapter\Impl\Adapter\DisplaySourceFileImpl;

$showFile = new DisplaySourceFileImpl(dirname(__DIR__) . '/ShowFile.php');
$showFile->display();