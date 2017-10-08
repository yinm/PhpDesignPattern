<?php
namespace DoYouPhp\PhpDesignPattern\Builder\Director;

use DoYouPhp\PhpDesignPattern\Builder\Builder\NewsBuilder;

/**
 * Directorクラスに相当する
 */
class NewsDirector
{
    private $builder;
    private $url;

    public function __construct(NewsBuilder $builder, $url)
    {
        $this->builder = $builder;
        $this->url = $url;
    }

    public function getNews()
    {
        $news_list = $this->builder->parse($this->url);

        return $news_list;
    }
}
