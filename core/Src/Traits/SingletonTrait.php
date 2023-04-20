<?php

namespace SingletonTrait;

trait SingletonTrait {

    private static self $instance;

    private static function single(): self {
        if (empty(self::$instance)) self::$instance = new static();
        return self::$instance;
    }

    private function __construct() {

    }
}