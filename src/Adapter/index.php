<?php

require realpath(__DIR__ . '/../../') . '/vendor/autoload.php';

try {
    echo 'This a an adapter example ' . "\n";
    
    $tester = new \Patterns\Adapter\Tester();
} catch (\Exception $e) {
    echo $e->getMessage() . ' #' . $e->getLine() . ' ' . $e->getFile();
}
