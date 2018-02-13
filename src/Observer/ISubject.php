<?php

namespace Patterns\Observer;

interface ISubject
{
    public function attach(IObserver $Observer);
    public function detach(IObserver $Observer);
    public function notify();
}