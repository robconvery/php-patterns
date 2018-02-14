<?php

namespace Patterns\Observer;

use Patterns\Observer\IObserver;
use Patterns\Observer\ISubject;

class PatternObserver implements IObserver
{
    /**
     * PatternObserver constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param \Patterns\Observer\ISubject $Subject
     */
    public function update(ISubject $Subject)
    {
        echo $Subject->getMe() . ' ' . uniqid() . "\n";
    }

}