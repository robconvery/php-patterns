<?php
/**
 * Created by PhpStorm.
 * User: robert.convery
 * Date: 25/08/2017
 * Time: 06:43
 */

namespace Patterns\DomainName;

use Patterns\DomainName\Product;

class Tester
{

    public function __construct()
    {
        $word = Product::newWordProcessor('Thinking Word');
        $calc = Product::newSpreadsheet('Thinking Speadsheet');
        $db = Product::newDatabase('Thinking DB');
    }
}