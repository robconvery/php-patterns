<?php
/**
 * Class Singleton
 *
 * @package Patterns\Singleton
 * @author robconvery <robconvery@me.com>
 */

namespace Patterns\Singleton;

class Singleton
{
    private static $instance;

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Singleton constructor.
     */
    protected function __construct()
    {
    }

    /**
     * clone method
     */
    private function __clone()
    {
    }

    /**
     * wakeup method
     */
    private function __wakeup()
    {
    }
}
