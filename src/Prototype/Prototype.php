<?php

namespace Patterns\Prototype;

/**
 * Description of Prototype
 *
 * @author robertconvery
 */
abstract class Prototype 
{
    public $eyeColour;
    public $wingBeat;
    public $unitEyes;
    
    abstract function __clone();
   
}
