<?php
/**
 * Class AbstractBookTopic
 *
 * @package Patterns\ChainOfResponsibility
 * @author robconvery <robconvery@me.com>
 */

namespace Patterns\ChainOfResponsibility;

abstract class AbstractBookTopic
{
    abstract public function getTopic();
    abstract public function getTitle();
    abstract public function setTitle($title_in);
}
