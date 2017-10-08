<?php
namespace DoYouPhp\PhpDesignPattern\Bridge\Implementor;

/**
 * Implementorに相当する
 * このサンプルでは、インターフェースとして実装
 */
interface DataSource
{
    public function open();
    public function read();
    public function close();
}
