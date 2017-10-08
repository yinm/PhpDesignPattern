<?php
namespace DoYouPhp\PhpDesignPattern\Adapter;

/**
 * 指定されたファイルの内容を表示するクラスです
 */
class ShowFile
{
    /**
     * 内容を表示するファイル名
     *
     * @access private
     */
    private $filename;

    /**
     * コンストラクタ
     *
     * @param string ファイル名
     * @throws \Exception
     */
    public function __construct($filename)
    {
        if (!is_readable($filename)) {
            throw new \Exception('file "'.$filename.'" is not readable !');
        }
        $this->filename = $filename;
    }

    /**
     * プレーンテキストとして表示します
     */
    public function showPlain()
    {
        echo file_get_contents($this->filename);
    }

    /**
     * キーワードをハイライトして表示します
     */
    public function showHighlight()
    {
        highlight_file($this->filename);
    }
}
