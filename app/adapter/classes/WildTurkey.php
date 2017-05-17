<?php

namespace Ppatterns\adapter\classes;

use Ppatterns\adapter\interfaces\Turkey;

class WildTurkey implements Turkey
{
    public function gobble()
    {
        echo 'Gobble gobble';
    }

    public function fly()
    {
        echo 'I\'m flying a short distance';
    }
}