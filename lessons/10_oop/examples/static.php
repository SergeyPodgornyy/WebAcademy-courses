<?php

abstract class Domain {
    public static function getGroup()
    {
        return 'default';
    }
}

class User extends Domain {
    private static $instance = null;
    private $group;

    private function __construct()
    {
        $this->group = static::getGroup();
    }

    public static function getGroup()
    {
        return 'users';
    }

    public static function create()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function sayHello()
    {
        echo "Hello World from " . $this->group;
    }
}

class Document extends Domain {
    private static $instance = null;
    private $group;

    private function __construct()
    {
        $this->group = static::getGroup();
    }

    public static function create()
    {
        if (is_null(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function sayHello()
    {
        echo "Hello World from " . $this->group;
    }
}

echo User::create()->sayHello();
echo "<br>";
echo Document::create()->sayHello();
