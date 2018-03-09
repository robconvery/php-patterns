<?php

require dirname(dirname(__DIR__)) . '/../vendor/autoload.php';

use Patterns\BasicPatterns\Gateway\MessageGateway;

try {
    $message = 'Hello world';
    $args = [];
    $MessageGateway = new MessageGateway();
    $MessageGateway->sendMessage($message, $args);
    
    echo 'This a Gateway example ' . "\n";
} catch (Exception $e) {
    echo $e->getMessage() . ' #' . $e->getLine() . ' ' . $e->getFile();
}
