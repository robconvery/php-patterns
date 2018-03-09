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
    const GENDER = 'FEMALE';
    public $fecundity;

    /**
     * FemalePrototype constructor.
     */
    public function __construct()
    {
        $this->eyeColour = 'red';
        $this->wingBeat = '220';
        $this->unitEyes = '760';
    }

    /**
     * clone method
     */
    public function __clone()
    {
    }
}
