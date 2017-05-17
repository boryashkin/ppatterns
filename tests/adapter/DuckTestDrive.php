<?php

namespace Ppatterns\tests\adapter;


use Ppatterns\adapter\adapters\TurkeyAdapter;
use Ppatterns\adapter\classes\MallardDuck;
use Ppatterns\adapter\classes\WildTurkey;
use Ppatterns\adapter\interfaces\Duck;

class DuckTestDrive
{
    public function main(array $args)
    {
        $duck = new MallardDuck();

        $turkey = new WildTurkey();
        $turkeyAdapter = new TurkeyAdapter($turkey);

        echo 'The Turkey says...';
        $turkey->gobble();
        $turkey->fly();

        echo "\nThe Duck says...";
        self::testDuck($duck);

        echo "\nThe TurkeyAdapter says...";
        self::testDuck($turkeyAdapter);
    }

    public static function testDuck(Duck $duck)
    {
        $duck->quack();
        $duck->fly();
    }
}