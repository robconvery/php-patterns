<?php

require realpath(__DIR__ . '/../../') . '/vendor/autoload.php';

try {
    $PatternSubject = new \Patterns\Observer\PatternSubject();

    $a = new \Patterns\Observer\PatternObserver();
    $b = new \Patterns\Observer\PatternObserver();

    $PatternSubject->attach($a);
    $PatternSubject->attach($b);

    $PatternSubject->updateMe('Hello');
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
}
