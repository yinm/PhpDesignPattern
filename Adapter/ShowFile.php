<?php
namespace PhpDesignPattern\Adapter;

/**
 * 2nd
 *
 * Class ShowFile
 * @package PhpDesignPattern\Adapter
 */
class ShowFile
{
    private $filename;

    public function __construct($filename)
    {
        if (! is_readable($filename)) {
            throw new \Exception('file "' . $filename . '" is not readable !');
        }

        $this->filename = $filename;
    }

    public function showPlain()
    {
        echo file_get_contents($this->filename);
    }

    public function showHighlight()
    {
        highlight_file($this->filename);
    }
}