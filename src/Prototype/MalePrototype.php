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
    const GENDER = 'MALE';
    public $mated;

    /**
     * MalePrototype constructor.
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
