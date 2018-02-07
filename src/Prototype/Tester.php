<?php

namespace Patterns\Prototype;

use Patterns\Prototype\MalePrototype;
use Patterns\Prototype\FemalePrototype;
use Patterns\Prototype\Prototype;

/**
 * Description of Client
 *
 * @author robertconvery
 */

class Tester 
{
    private $fly1;
    private $fly2;
    
    private $c1fly;
    private $c2fly;
    private $updatedCloneFly;
    
    public function __construct() 
    {
        $this->fly1 = new MalePrototype();
        $this->fly2 = new FemalePrototype();
        
        $this->c1fly = clone $this->fly1;
        
        $this->c2fly = clone $this->fly2;
        $this->updatedCloneFly = clone $this->fly2;
        
        // update clones
        $this->c1fly = clone $this->fly2;
        $this->c2fly->fecundity = '186';
        $this->updatedCloneFly->eyeColour = 'purple';
        $this->updatedCloneFly->wingBeat = '220';
        $this->updatedCloneFly->unitEyes = '760';
        $this->updatedCloneFly->fecundity = '92';
        
        // send through type hinting method
        $this->showFly($this->c1fly);
        $this->showFly($this->c2fly);
        $this->showFly($this->updatedCloneFly);
        
    }
    
    private function showFly(Prototype $fly)
    {
        echo 'Eye colour ' . $fly->eyeColour . "\n";
        echo 'Wing beats/second ' . $fly->wingBeat . "\n";
        echo 'Eye units ' . $fly->unitEyes . "\n";
        $genderNow = $fly::gender;
        echo 'Gender ' . $genderNow . "\n";
        
        if ($genderNow == 'FEMALE') {
            echo 'Number of eggs ' . $fly->fecundity . "\n";
        } else {
            echo 'Mated ' . $fly->mated . "\n";
        }
        
    }
}
