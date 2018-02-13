<?php

namespace Patterns\Observer;

interface IObserver
{
    public function update(Subject $Subject);
}