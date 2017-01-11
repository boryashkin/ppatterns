<?php
/**
 * Fake Java.utils.Observable
 */
namespace Ppatterns\observer\abstracts;

use SplSubject;
use SplObserver;

abstract class Observable implements SplSubject
{
    /**
     * @var bool
     */
    private $changed = false;

    /**
     * @var SplObserver[]
     */
    private $observers = [];
    
    protected function setChanged()
    {
        $this->changed = true;
    }

    protected function clearChanged()
    {
        $this->changed = false;
    }

    /**
     * @return bool
     */
    protected function hasChanged()
    {
        return (bool)$this->changed;
    }
    
    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }
    
    public function detach(SplObserver $observer)
    {
        if (false !== ($key = array_search($observer, $this->observers))) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        if ($this->changed) {
            foreach ($this->observers as $key => $observer) {
                $observer->update($this);
            }

            $this->clearChanged();
        }
    }
}