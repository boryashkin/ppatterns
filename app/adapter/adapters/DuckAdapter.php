<?php

namespace Ppatterns\adapter\adapters;

use Ppatterns\adapter\interfaces\Duck;
use Ppatterns\adapter\interfaces\Turkey;

class DuckAdapter implements Turkey
{
    protected $duck;

    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

    public function gobble()
    {
        $this->duck->quack();
    }

    public function fly()
    {
        if (!rand(0, 5)) {
            $this->duck->fly();
        }
    }
}
