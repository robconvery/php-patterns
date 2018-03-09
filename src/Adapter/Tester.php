<?php

namespace Patterns\Adapter;

use Patterns\Adapter\DollarCalc;
use Patterns\Adapter\EuroAdapter;
use Patterns\Adapter\ITarget;

/**
 * Description of Client
 *
 * @author robertconvery
 */

class Tester
{
    private $requestNow;
    private $dollarRequest;
    
    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        
        $euro = "€";
        echo "Euros: {$euro}" . $this->makeAdapterRequest($this->requestNow) . "\n";
        echo "Dollars: $" . $this->makeDollarRequest($this->dollarRequest) . "\n";
    }
    
    private function makeAdapterRequest(ITarget $req)
    {
        return $req->requestCalc(40, 50);
    }

    private function makeDollarRequest(DollarCalc $req)
    {
        return $req->requestCalc(40, 50);
    }
}
