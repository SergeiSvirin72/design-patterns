<?php


namespace Singleton;


class Singleton
{
    private static ?self $instance = null;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function someOperation()
    {
        print "The result of the Singleton.\n";
    }
}