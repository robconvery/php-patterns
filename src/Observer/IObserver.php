<?php

namespace Patterns\Observer;

use Patterns\Observer\ISubject;

interface IObserver
{
    public function update(ISubject $Subject);
}
