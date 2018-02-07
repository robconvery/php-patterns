<?php

namespace Patterns\Command;

use Patterns\Command\ICommand;
use Patterns\Command\Document;

/**
 * OpenCommand Class
 *
 * @author robertconvery
 */

class OpenCommand implements ICommand 
{   
    /**
     * Method execute 
     * @return string
     */
    public function execute() 
    {
        $document = new Document();
        // ask user about document
        return $document->open();
    }
           
    
}
