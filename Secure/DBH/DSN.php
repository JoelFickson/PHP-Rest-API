<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/14/2019
 * Time: 8:48 PM
 */

class DSN
{
    public $dbc;
    private static $instance;

    private function __construct()
    {
        $this->dbhc = new PDO('mysql:host=localhost;dbname=example', "root", "");
    }

    //singleton pattern
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
}