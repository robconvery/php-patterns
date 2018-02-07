<?php

namespace Patterns\Prototype;

use Patterns\Prototype\Prototype;

/**
 * Description of MalePrototype
 *
 * @author robertconvery
 */
class MalePrototype extends Prototype
{
    const gender = 'MALE';
    public $mated;
    
    public function __construct() 
    {
        $this->eyeColour = 'red';
        $this->wingBeat = '220';
        $this->unitEyes = '760';
    }
    
    function __clone() {}
    
}
