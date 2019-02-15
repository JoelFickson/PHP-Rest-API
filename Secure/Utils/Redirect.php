<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/15/2019
 * Time: 9:40 AM
 */

class Redirect
{
    public static function LoadURL($URL)
    {
        header("location:$URL");
    }

}