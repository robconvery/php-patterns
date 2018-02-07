<?php

namespace Patterns\Adapter;

/**
 * Description of DollarCalc
 *
 * @author robertconvery
 */
class DollarCalc 
{
    private $dollar;
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
     * 
     * @return type
     */
    public function requestTotal()
    {
        $this->euro *= $this->rate;
        return $this->euro;
    }

}
