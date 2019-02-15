<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/15/2019
 * Time: 12:05 AM
 */

class User extends UserModel
{


    public static function RegisterNewUser()
    {

        $user_id = self::GenerateUserID();
        $fullname = self::getFullname();
        $email = self::getEmail();
        $password = self::getPassword();
        $zip = self::getZip();
        $address = self::getAddress();
        $city = self::getCity();

        $Password = password_hash($password, PASSWORD_BCRYPT); //Hashing the password
//Check if user already exists.
        $Status = self::CheckUser();

        if ($Status == "FOUND") {
            self::setStatus("FOUND");

        } else {
//            proceed to register new user
            //Register user to database
            $PST = "INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`,`zip`, `address`, `city`) 
        values ('$user_id','$fullname','$email','$Password','$zip','$address','$city')";

            $RST = DSN::getInstance()->CRUD($PST);

            if ($RST->rowCount() > 0) {
                self::setStatus("SUCCESS");
            } else {
                self::setStatus("FAILED");
            }
        }


    }

    public static function CheckUser()
    {
        $Email = self::getEmail();
        $PST = "SELECT * FROM users WHERE email='$Email'";

        $RST = DSN::getInstance()->CRUD($PST);

        if ($RST->rowCount() > 0) {
//            User already exists in Database
            self::setStatus("FOUND");
        } else {
//            User not found.
            self::setStatus("NOT_FOUND");
        }


    }

    private static function GenerateUserID()
    {
        $General = "joel";
        $UserID = $General . "_" . bin2hex(openssl_random_pseudo_bytes(10)); // 20 chars

        return $UserID;
    }

    public static function LoginUser()
    {
        $Email = self::getEmail();
        $Password = self::getPassword();
        $PST = "SELECT * FROM users WHERE email='$Email'";

        $RST = DSN::getInstance()->CRUD($PST);


        if ($RST->rowCount() > 0) {

            $Data = $RST->fetch();

            $DB_Pass = $Data['password'];
            if (password_verify($Password, $DB_Pass)) {

                $UserID = $Data['user_id'];
                $UserEmail = $Data['email'];
                self::setUserId($UserID);
                self::setEmail($UserEmail);
                self::setStatus("SUCCESS");

            } else {
                self::setStatus("PASS_ERROR");
            }


        } else {
            self::setStatus("NOT_FOUND");
        }

    }

}