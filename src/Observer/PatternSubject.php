<?php

namespace Patterns\Observer;

use Patterns\Observer\ISubject;

class PatternSubject implements ISubject
{
    private $observers = [];

    /**
     * @param IObserver $Observer
     * @return $this
     */
    public function attach(IObserver $Observer)
    {
        $this->observers[] = $Observer;
        return $this;
    }

    /**
     * @param IObserver $Observer
     * @return $this
     */
    public function detach(IObserver $Observer)
    {
        foreach($this->observers as $key => $observer) {
            if ($Observer == $observer) {
                unset($this->observers[$key]);
            }
        }
        return $this;
    }

    public function notify()
    {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }
}