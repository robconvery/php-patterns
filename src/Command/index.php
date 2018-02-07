<?php

require dirname(__DIR__) . '/../vendor/autoload.php';

use Patterns\Command\Client;

try {
    
    $client = new Client();
    
    echo 'This a Command pattern example ' . "\n";
    
} catch(\Exception $e) {
    echo $e->getMessage() . ' #' . $e->getLine() . ' ' . $e->getFile();
}
