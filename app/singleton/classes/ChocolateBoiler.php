<?php

namespace Ppatterns\singleton\classes;

class ChocolateBoiler
{
    /** @var ChocolateBoiler */
    private static $boiler;
    /** @var bool */
    private $empty;
    /** @var bool */
    private $boiled;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance()
    {
        if (!self::$boiler) {
            self::$boiler = new self();
        }

        return self::$boiler;
    }

    public function boil()
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            echo "Boiling...\n";
            $this->boiled = true;
        }
    }

    public function fill()
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
            echo "filling...\n";
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
            echo "draining...\n";
        }
    }

    public function isEmpty()
    {
        return (bool)$this->empty;
    }

    public function isBoiled()
    {
        return (bool)$this->boiled;
    }
}
