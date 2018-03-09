<?php

namespace Patterns\DomainName;

use Patterns\DomainName\CompleteRecognitionStrategy;
use Patterns\DomainName\ThreeWayRecognitionStrategy;
use Patterns\DomainName\Contract;

class Product
{
    private $name;
    private $recognitionStrategy;

    public function __construct($name, $recognitionStrategy)
    {
        $this->name = $name;
        $this->recognitionStrategy = $recognitionStrategy;
        $this->recognitionStrategy->calculateRevenueStrategy(new Contract($this));
    }

    public static function newWordProcessor($name)
    {
        return new static($name, new CompleteRecognitionStrategy());
    }

    public static function newSpreadsheet($name)
    {
        return new static($name, new ThreeWayRecognitionStrategy(60, 90));
    }

    public static function newDatabase($name)
    {
        return new static($name, new ThreeWayRecognitionStrategy(30, 60));
    }
}
