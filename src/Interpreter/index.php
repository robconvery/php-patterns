<?php

require dirname(__DIR__) . '/../vendor/autoload.php';

try {
    echo 'This a Interpreter pattern example ' . "\n";
} catch (Exception $e) {
    echo $e->getMessage() . ' #' . $e->getLine() . ' ' . $e->getFile();
}
