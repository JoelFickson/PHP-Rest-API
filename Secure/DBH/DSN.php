<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/14/2019
 * Time: 8:48 PM
 */

class DSN extends Env
{
    private static $_instance = null;
    private $_pdo;


    private function __construct()
    {

        $opt = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->_pdo = new PDO("mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME,
                self::DB_USER, self::DB_PASS, $opt);


        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    // Magic method clone is empty to prevent duplication of connection

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new DSN();
        }
        return self::$_instance;
    }


    public function CRUD($sql)
    {
        return $this->_pdo->query($sql);
    }

}