<?php

namespace Ppatterns\strategy\classes\ducks;


use Ppatterns\strategy\abstracts\Duck;

class MallardDuck extends Duck
{
    public function display()
    {
        echo 'Mallard duck';
    }
}