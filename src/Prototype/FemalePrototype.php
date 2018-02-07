<?php

namespace Patterns\Prototype;

use Patterns\Prototype\Prototype;

/**
 * Description of FemalePrototype
 *
 * @author robertconvery
 */
class FemalePrototype extends Prototype
{
    const gender = 'FEMALE';
    public $fecundity;
    
    public function __construct() 
    {
        $this->eyeColour = 'red';
        $this->wingBeat = '220';
        $this->unitEyes = '760';
    }
    
    function __clone() {}
}
