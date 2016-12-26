<?php

namespace Ppatterns\observer\interfaces;

interface Observer
{
    public function update($temp, $humidity, $pressure);
}