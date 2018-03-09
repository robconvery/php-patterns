<?php
/**
 * Class BookSubTopic
 *
 * @package Patterns\ChainOfResponsibility
 * @author robconvery <robconvery@me.com>
 */

namespace Patterns\ChainOfResponsibility;

use Patterns\ChainOfResponsibility\AbstractBookTopic;
use Patterns\ChainOfResponsibility\BookTopic;

class BookSubTopic extends AbstractBookTopic
{
    private $topic;
    private $parentTopic;
    private $title;

    /**
     * BookSubTopic constructor.
     * @param string $topic_in
     * @param \Patterns\ChainOfResponsibility\BookTopic $parentTopic_in
     */
    public function __construct($topic_in, BookTopic $parentTopic_in)
    {
        $this->topic = $topic_in;
        $this->parentTopic = $parentTopic_in;
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
     * @return \Patterns\ChainOfResponsibility\BookTopic
     */
    public function getParentTopic()
    {
        return $this->parentTopic;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        if (null != $this->title) {
            return $this->title;
        } else {
            return $this->parentTopic->getTitle();
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
