<?php

namespace Ppatterns\adapter\adapters;

use Ppatterns\adapter\interfaces\Duck;
use Ppatterns\adapter\interfaces\Turkey;

class TurkeyAdapter implements Duck
{
    protected $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}