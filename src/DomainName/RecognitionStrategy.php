<?php
/**
 * Created by PhpStorm.
 * User: robert.convery
 * Date: 24/08/2017
 * Time: 22:40
 */

namespace Patterns\DomainName;

use Patterns\DomainName\Contract;

interface RecognitionStrategy
{
    public function calculateRevenueStrategy(Contract $contract);
}
