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
     * @param int $productNow
     * @param int $serviceNow
     * @return int
     */
    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->dollar = $this->product + $this->service;
        return $this->requestTotal();
    }
    
    /**
     *
     * @return int
     */
    public function requestTotal()
    {
        $this->dollar *= $this->rate;
        return $this->dollar;
    }
}
