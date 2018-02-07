<?php

namespace Patterns\Command;

use Patterns\Command\Document;
use Patterns\Command\OpenCommand;
use Patterns\Command\PasteCommand;

/**
 * Application Class
 *
 * @author robertconvery
 */

class Client 
{
    public function __construct() 
    {
        $document = new Document;
        
        $paste = new PasteCommand($document);
        $paste->execute();
        
        $open = new OpenCommand();
        $open->execute();
       
    }
}
