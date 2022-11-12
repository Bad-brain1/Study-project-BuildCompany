<?php

class Db
{
    private static $instance = NULL;
    private $dbconnect;

    public function __construct()
    {
        echo'connect';
    }

    public static function getInstance()
    {
        if (self::$instance == NULl) {
            self::$instance = new static();
        } else {
        }
        return self::$instance;
    }

    public static function getBDconnect()
    {
        try {
            $db = self::$instance;
            $db = new mysqli("localhost", "root", "","buildcompany");
            return $db;
        } catch (Exception $e) {
            echo "error" . $e->getMessage();
        }
    }
}

