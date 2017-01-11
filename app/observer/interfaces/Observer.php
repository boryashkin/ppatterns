<?php
/**
 * Fake Java.util.Observer
 */

namespace Ppatterns\observer\interfaces;

use Ppatterns\observer\abstracts\Observable;

interface Observer
{
    public function update(Observable $observable, $arg = null);
}