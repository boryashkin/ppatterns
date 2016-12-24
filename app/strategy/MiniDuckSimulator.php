<?php

namespace Ppatterns\strategy;

use Ppatterns\strategy\abstracts\Duck;
use Ppatterns\strategy\behaviors\fly\FlyWithWings;
use Ppatterns\strategy\behaviors\quack\Quack;
use Ppatterns\strategy\classes\ducks\MallardDuck;

class MiniDuckSimulator
{
    public static function main(array $args)
    {
        /**
         * @var Duck $mallard
         */
        $mallard = new MallardDuck(new FlyWithWings(), new Quack());

        $mallard->performFly();
        $mallard->performQuack();
    }
}