<?php
/**
 * Created by PhpStorm.
 * User: robert.convery
 * Date: 25/08/2017
 * Time: 06:26
 */

namespace Patterns\DomainName;

use Patterns\DomainName\RecognitionStrategy;
use Patterns\DomainName\Contract;

class ThreeWayRecognitionStrategy implements RecognitionStrategy
{
    public $firstRecognitionOffset;
    public $secondRecognitionOffset;

    public function __construct($firstRecognitionOffset, $secondRecognitionOffset)
    {
        $this->firstRecognitionOffset = $firstRecognitionOffset;
        $this->secondRecognitionOffset = $secondRecognitionOffset;
    }

    public function calculateRevenueStrategy(Contract $contract)
    {
        // TODO: Implement calculateRevenueStrategy() method.
    }
}