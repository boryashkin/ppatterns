<?php

namespace Ppatterns\strategy\abstracts;

use Ppatterns\strategy\interfaces\FlyBehavior;
use Ppatterns\strategy\interfaces\QuackBehavior;

abstract class Duck
{
    /**
     * @var FlyBehavior
     */
    protected $flyBehavior;

    /**
     * @var QuackBehavior
     */
    protected $quackBehavior;

    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    public abstract function display();

    /**
     * @return void
     */
    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    /**
     * @return void
     */
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo 'All ducks float, even decoys!';
    }
}