<?php
/**
 * Created by PhpStorm.
 * User: robert.convery
 * Date: 24/08/2017
 * Time: 22:15
 */

namespace Patterns\DomainName;


class Contract
{
    private $product;
    private $revenue;
    private $whenSigned;
    private $id;

    public function __construct($product, $revenue=null, $whenSigned=null)
    {
        $this->product = $product;
        $this->revenue = $revenue;
        $this->whenSigned = $whenSigned;
    }

    public function calculateRecognitions()
    {

    }
}