<?php
/**
 * Class BookTopic
 *
 * @package Patterns\ChainOfResponsibility
 * @author robconvery <robconvery@me.com>
 */

namespace Patterns\ChainOfResponsibility;

use Patterns\ChainOfResponsibility\AbstractBookTopic;

class BookTopic extends AbstractBookTopic
{
    private $topic;
    private $title;

    /**
     * BookTopic constructor.
     * @param $topic_in
     */
    public function __construct($topic_in)
    {
        $this->topic = $topic_in;
        $this->title = null;
    }

    /**
     * @return mixed
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * this is the end of the chain - returns
     * title or says there is none
     * @return null|string
     */
    public function getTitle()
    {
        if (null != $this->title) {
            return $this->title;
        } else {
            return 'there is no title available';
        }
    }

    /**
     * @param string $title_in
     */
    public function setTitle($title_in)
    {
        $this->title = $title_in;
    }
}
