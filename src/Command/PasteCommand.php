<?php

namespace Patterns\Command;

use Patterns\Command\ICommand;

/**
 * PasteCommand Class
 *
 * @author robertconvery
 */

class PasteCommand implements ICommand
{
    private $receiver;
    
    /**
     * Method constructor
     * @param $receiver
     */
    public function __construct($receiver) 
    {
        $this->receiver = $receiver;
    }

    /**
     * Method execute
     * @return string
     */
    public function execute() 
    {
        return $this->receiver->paste();
    }
}
