<?php

require realpath(__DIR__ . '/../../') . '/vendor/autoload.php';

use Patterns\DomainName\Tester;

try {
    $worker = new Tester();

    echo 'This a an Domain Name example ' . "\n";
} catch (\Exception $e) {
    echo $e->getMessage() . ' #' . $e->getLine() . ' ' . $e->getFile();
}
