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
    <h4 class="text-center">JOELS REST</h4>
    <p class="ThemeText">
        Registration. Including jQuery AJAX calls. Backend Validation, Saving to DB.
        Password encryption.
    </p>

</div>


<div class="container">

    <div class="container h-100">
        <div class="row h-100 justify-content-center">
            <div class="card col-6">

                <div class="container">
                    <div class="container">
                        <h5 class="text-center ThemeText">Login Below</h5>

                        <div class="UI"></div>
                        <form class="LoginForm">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="EmailAdd" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="Password" class="form-control" id="inputPassword3"
                                           placeholder="Password">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary col-sm">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php


StaticFilesLoader::LoadMyJS();


?>

<script>
    $("document").ready(function () {
        const Loading = $("#hidden");
        Loading.hide();
        const Form = $(".LoginForm");
        Form.submit(function (event) {
            event.preventDefault();
            Loading.show();
            LoginForm();
        })
    });
</script>

</body>
</html>
