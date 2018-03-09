<?php
/**
 * @author robconvery <robconvery@me.com>
 */

require realpath(__DIR__ . '/../../') . '/vendor/autoload.php';

use Patterns\ChainOfResponsibility\BookTopic;
use Patterns\ChainOfResponsibility\BookSubTopic;
use Patterns\ChainOfResponsibility\BookSubSubTopic;

echo "BEGIN TESTING CHAIN OF RESPONSIBILITY PATTERN". "\n";
echo "". "\n";

$bookTopic = new BookTopic("PHP 5");
echo "bookTopic before title is set:". "\n";
echo "topic: " . $bookTopic->getTopic(). "\n";
echo "title: " . $bookTopic->getTitle(). "\n";
echo "". "\n";

$bookTopic->setTitle("PHP 5 Recipes by Babin, Good, Kroman, and Stephens");
echo "bookTopic after title is set: ". "\n";
echo "topic: " . $bookTopic->getTopic(). "\n";
echo "title: " . $bookTopic->getTitle(). "\n";
echo "". "\n";

$bookSubTopic = new BookSubTopic("PHP 5 Patterns", $bookTopic);
echo "bookSubTopic before title is set: ". "\n";
echo "topic: " . $bookSubTopic->getTopic(). "\n";
echo "title: " . $bookSubTopic->getTitle(). "\n";
echo "". "\n";

$bookSubTopic->setTitle("PHP 5 Objects Patterns and Practice by Zandstra");
echo "bookSubTopic after title is set: ". "\n";
echo "topic: ". $bookSubTopic->getTopic(). "\n";
echo "title: ". $bookSubTopic->getTitle(). "\n";
echo "". "\n";

$bookSubSubTopic = new BookSubSubTopic(
    "PHP 5 Patterns for Cats",
    $bookSubTopic
);
echo "bookSubSubTopic with no title set: ". "\n";
echo "topic: " . $bookSubSubTopic->getTopic(). "\n";
echo "title: " . $bookSubSubTopic->getTitle(). "\n";
echo "". "\n";

$bookSubTopic->setTitle(null);
echo "bookSubSubTopic with no title for set for bookSubTopic either:". "\n";
echo "topic: " . $bookSubSubTopic->getTopic(). "\n";
echo "title: " . $bookSubSubTopic->getTitle(). "\n";
echo "". "\n";

echo "END TESTING CHAIN OF RESPONSIBILITY PATTERN". "\n";
