<?php

namespace Patterns\BasicPatterns\Gateway;

/**
 * @author robertconvery
 */

interface IMessageGateway 
{
    public function sendMessage($message, array $args);
}
