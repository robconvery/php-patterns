<?php

namespace Patterns\BasicPatterns\Gateway;

use Patterns\BasicPatterns\Gateway\IMessageGateway;
use Patterns\BasicPatterns\Gateway\ExternalMessageSender;

/**
 * MessageGateway, example of a Gateway Pattern
 * @todo Constuct unit tests
 * @author robertconvery
 */
class MessageGateway implements IMessageGateway
{
    private $messageSender;

    /**
     * MessageGateway constructor
     */
    public function __construct()
    {
        $this->messageSender = new ExternalMessageSender();
    }

    /**
     * Method used to encapsulate ExternalMessageSender::send
     * @param type $message
     * @param array $args
     */
    private function send($message, array $args)
    {
        // validation goes here
        $this->messageSender->send();
    }
    
    /**
     * Send a standard message...
     * @param type $message
     * @param array $args
     */
    public function sendMessage($message, array $args)
    {
        $this->send($message, $args);
    }
}
