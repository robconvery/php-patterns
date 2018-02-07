<?php

namespace Patterns\Adapter;

use Patterns\Adapter\EuroCalc;
use Patterns\Adapter\ITarget;

/**
 * Description of EuroAdapter
 *
 * @author robertconvery
 */
class EuroAdapter extends EuroCalc implements ITarget
{
    public function __construct() 
    {
        $this->requester();
    }
    
    public function requester() 
    {
        $this->rate=.8111;
        return $this->rate;
    }

}
