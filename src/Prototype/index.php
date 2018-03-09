<?php

require realpath(__DIR__ . '/../../') . '/vendor/autoload.php';

try {
    echo 'This a an Prototype example ' . "\n";
    
    $tester = new \Patterns\Prototype\Tester();
} catch (\Exception $e) {
    echo $e->getMessage() . ' #' . $e->getLine() . ' ' . $e->getFile();
}
