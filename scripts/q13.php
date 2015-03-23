<?php

class DemoClass
{
    private static $instance;

    public function __construct() {}

    public static function getInstance()
    {
        if(null === static::$instance) {
            static::$instance = new self();
        }

        return static::$instance;
    }
}

$a = new DemoClass;//::getInstance();
$b = new DemoClass;//::getInstance();

var_dump(assert($a === $b));