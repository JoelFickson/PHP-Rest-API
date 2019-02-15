<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/14/2019
 * Time: 8:35 PM
 */

require_once "vendor/autoload.php";
?>

<!doctype html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href="Public/UI/Main.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <title>Joel REST!</title>
</head>
<body>
<?php
require_once "Public/UI/Views/header.php";
?>

<div class="container h-100 col-6" id="home-display">
    <h4 class="text-center">Hello Guys</h4>
    <p class="ThemeText">
        A simple project that uses PHP, MySQL
    </p>

</div>


<div class="container">
    <h4 class="text-center ThemeText">FEATURES</h4>
    <hr/>
    <div class="row">
        <div class="col-sm">
            <div class="card">

                <div class="container">
                    <h4 class="ThemeText"><strong>FrontEnd</strong></h4>
                    <p>Architect & Engineer</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <div class="container">
                    <h4 class="ThemeText"><strong>BackEnd</strong></h4>
                    <p>Architect & Engineer</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">

                <div class="container">
                    <h4 class="ThemeText"><strong>FrontEnd</strong></h4>
                    <p>Architect & Engineer</p>
                </div>
            </div>
        </div>
    </div>

</div>

<?php


StaticFilesLoader::LoadMyJS();


?>

</body>
</html>
