<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/14/2019
 * Time: 9:24 PM
 */

class StaticFilesLoader extends Env
{


    /**
     * StaticFilesLoader constructor.
     */
    public static function LoadMyCSS()
    {
        $UI = self::APP_STATIC;
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>";
        echo "<link rel='stylesheet' href='{$UI}Main.css'>";
    }

    public static function LoadMyJS()
    {
        $UX = self::APP_JS;
        $RouteHandler = self::APP_ROUTE_HANDLER;
        echo "<script src = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>";
        echo "<script src = 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>";
        echo "<script src = 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>";
        echo "<script src = '{$UX}Main.js'></script>";
        echo "<script src = '{$RouteHandler}UserRouter.js'></script>";


    }
}