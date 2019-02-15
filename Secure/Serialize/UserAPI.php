<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/14/2019
 * Time: 11:05 PM
 */
require_once "../../vendor/autoload.php";
$instance = htmlentities($_GET['action'], ENT_QUOTES, "UTF-8");
switch ($instance) {
    case "Reg":
        //Get values from submitted form
        //Sanitizing User Inputs

        $Fullname = htmlentities($_POST['FullnameInput'], ENT_QUOTES, "UTF-8");
        $Email = htmlentities($_POST['EmailAdd'], ENT_QUOTES, "UTF-8");
        $PasswordOne = htmlentities($_POST['PasswordOne'], ENT_QUOTES, "UTF-8");
        $inputPasswordTwo = htmlentities($_POST['inputPasswordTwo'], ENT_QUOTES, "UTF-8");
        $Address = htmlentities($_POST['Address'], ENT_QUOTES, "UTF-8");
        $City = htmlentities($_POST['City'], ENT_QUOTES, "UTF-8");
        $inputState = htmlentities($_POST['inputState'], ENT_QUOTES, "UTF-8");
        $inputZip = htmlentities($_POST['inputZip'], ENT_QUOTES, "UTF-8");

        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $Error[] = "<p>Sorry you provided an invalid email address.</p>";
        }

        if (empty($Fullname)) {
            $Error[] = "<p>Please type your full name.</p>";
        }
        if (empty($Email)) {
            $Error[] = "<p>Please type your email address.</p>";
        }
        if (empty($PasswordOne)) {
            $Error[] = "<p>Please type your your password.</p>";
        }
        if (empty($inputPasswordTwo)) {
            $Error[] = "<p>Please type your your password.</p>";
        }

        if ($inputPasswordTwo != $PasswordOne) {
            $Error[] = "<p>Sorry your password do not match.</p>";
        }

        if (isset($Error)) {
            foreach ($Error as $er) {
                echo $er;
            }
        }

        if (empty($Error)) {


            UserModel::setAddress($Address);
            UserModel::setCity($City);
            UserModel::setFullname($Fullname);
            UserModel::setPassword($PasswordOne);
            UserModel::setZip($inputZip);
            UserModel::setState($inputState);
            UserModel::setEmail($Email);

            User::CheckUser();

            if (User::getStatus() == "FOUND") {
                echo "<p class='text-center danger'>Email has already been taken.</p>";

            } else {
                User::RegisterNewUser();
                switch (User::getStatus()) {

                    case "SUCCESS":
                        echo "<p class='text-center ThemeText'>Registered successfully.</p>";
                        break;
                    case "FAILED":
                        echo "<p class='text-center  text-danger'>There was an error in creating your account.</p>";
                        break;

                }
            }


        }


        break;
    case "Login":
        $Email = htmlentities($_POST['EmailAdd'], ENT_QUOTES, "UTF-8");
        $Password = htmlentities($_POST['Password'], ENT_QUOTES, "UTF-8");

        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $Error[] = "<p>Sorry you provided an invalid email address.</p>";
        }
        if (empty($Password)) {
            $Error[] = "<p>Please type your your password.</p>";
        }

        if (isset($Error)) {
            foreach ($Error as $er) {
                echo $er;
            }
        }

        if (empty($Error)) {
            UserModel::setPassword($Password);
            UserModel::setEmail($Email);

            User::LoginUser();
            switch (User::getStatus()) {
                case "NOT_FOUND":
                    echo "<p>User details not found.</p>";
                    break;
                case "PASS_ERROR":
                    echo "<p>Authentication error.</p>";
                    break;
                case "SUCCESS":
                    $UserEmail = User::getEmail();
                    $UserID = User::getUserId();
                    session_start();
                    $_SESSION['USER_ID'] = $UserID;
                    $_SESSION['J_MAIL'] = $UserEmail;
                    echo "<script>
                                    $(location).attr('href', 'profile/index')
                                    </script>";

                    break;

            }


        }

        break;

}