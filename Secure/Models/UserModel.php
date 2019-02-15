<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/15/2019
 * Time: 12:05 AM
 */

class UserModel
{
    private static $user_id, $fullname, $email, $password, $zip, $address, $state,
        $city, $Status;

    /**
     * @return mixed
     */
    public static function getState()
    {
        return self::$state;
    }

    /**
     * @param mixed $state
     */
    public static function setState($state)
    {
        self::$state = $state;
    }

    /**
     * @return mixed
     */
    public static function getUserId()
    {
        return self::$user_id;
    }

    /**
     * @param mixed $user_id
     */
    public static function setUserId($user_id)
    {
        self::$user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public static function getFullname()
    {
        return self::$fullname;
    }

    /**
     * @param mixed $fullname
     */
    public static function setFullname($fullname)
    {
        self::$fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public static function getEmail()
    {
        return self::$email;
    }

    /**
     * @param mixed $email
     */
    public static function setEmail($email)
    {
        self::$email = $email;
    }

    /**
     * @return mixed
     */
    public static function getPassword()
    {
        return self::$password;
    }

    /**
     * @param mixed $password
     */
    public static function setPassword($password)
    {
        self::$password = $password;
    }

    /**
     * @return mixed
     */
    public static function getZip()
    {
        return self::$zip;
    }

    /**
     * @param mixed $zip
     */
    public static function setZip($zip)
    {
        self::$zip = $zip;
    }

    /**
     * @return mixed
     */
    public static function getAddress()
    {
        return self::$address;
    }

    /**
     * @param mixed $address
     */
    public static function setAddress($address)
    {
        self::$address = $address;
    }

    /**
     * @return mixed
     */
    public static function getCity()
    {
        return self::$city;
    }

    /**
     * @param mixed $city
     */
    public static function setCity($city)
    {
        self::$city = $city;
    }

    /**
     * @return mixed
     */
    public static function getStatus()
    {
        return self::$Status;
    }

    /**
     * @param mixed $Status
     */
    public static function setStatus($Status)
    {
        self::$Status = $Status;
    }


}