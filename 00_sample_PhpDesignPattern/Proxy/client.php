<?php
namespace DoYouPhp\PhpDesignPattern\Proxy;

require dirname(__DIR__).'/vendor/autoload.php';

use DoYouPhp\PhpDesignPattern\Proxy\Subject\ItemDao;
use DoYouPhp\PhpDesignPattern\Proxy\RealSubject\DbItemDao;
use DoYouPhp\PhpDesignPattern\Proxy\RealSubject\MockItemDao;
use DoYouPhp\PhpDesignPattern\Proxy\Proxy\ItemDaoProxy;

function execute(ItemDao $dao, $use_proxy = false)
{
    if ($use_proxy === true) {
        $dao = new Proxy\ItemDaoProxy($dao);
    }

    for ($item_id = 1; $item_id <= 3; $item_id++) {
        $item = $dao->findById($item_id);
        printf('ID=%sの商品は「%s」です%s', $item_id, $item->getName(), PHP_EOL);
    }

    /**
     * 再度データを取得
     */
    $item_id = 2;
    $item = $dao->findById($item_id);
    printf('ID=%sの商品は「%s」です%s', $item_id, $item->getName(), PHP_EOL);
}

echo '■DbItemDao＋Proxyなし'.PHP_EOL;
execute(new DbItemDao());

echo '■MockItemDao＋Proxyなし'.PHP_EOL;
execute(new MockItemDao());

echo '■DbItemDao＋Proxyあり'.PHP_EOL;
execute(new DbItemDao(), true);

echo '■MockItemDao＋Proxyあり'.PHP_EOL;
execute(new MockItemDao(), true);
