<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/14/2019
 * Time: 8:48 PM
 */

class DSN extends Env
{
    public $DSN;
    private static $instance;

    private function __construct()
    {


        try {
            $this->DSN = new PDO("mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME,
                self::DB_USER, self::DB_PASS);


        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //SingleTon Connection Class
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }
}