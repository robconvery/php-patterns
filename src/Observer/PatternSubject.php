<?php

namespace Patterns\Observer;

use Patterns\Observer\ISubject;

class PatternSubject implements ISubject
{
    protected $me;
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

    /**
     * method notify
     */
    public function notify()
    {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @param mixed $value
     * @throws RuntimeException
     * @return $this
     */
    public function updateMe($value)
    {
        if (!is_numeric($value) && !is_string($value)) {
            throw new \RuntimeException('Invalid variable type');
        }

        $this->me = $value;
        $this->notify();
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMe()
    {
        return $this->me;
    }
}