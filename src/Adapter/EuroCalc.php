<?php

namespace Patterns\Adapter;

/**
 * Description of EuroCalc
 *
 * @author robertconvery
 */
class EuroCalc 
{
    private $euro;
    private $product;
    private $service;
    public $rate=1;
    
    /**
     * 
     * @param type $productNow
     * @param type $serviceNow
     * @return type
     */
    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->euro = $this->product + $this->service;
        return $this->requestTotal();
    }
    
    /**
     * @return decimal
     */
    public function requestTotal()
    {
        $this->euro *= $this->rate;
        return $this->euro;
    }
}
