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
            <div class="card col-8">

                <div class="container">
                    <form class="form-class">
                        <h4 class="ThemeText text-center">Register Account Below</h4>

                        <img id="hidden" src="Public/Assets/loading.gif"
                             class="img-fluid h-100 justify-content-center center-block"/>

                        <div class="UI"></div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="FullnameInput">Full Name</label>
                                <input type="text" class="form-control" name="FullnameInput" required id="FullnameInput"
                                       placeholder="Full name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" name="EmailAdd" required class="form-control" id="inputEmail"
                                       placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPasswordOne">Password</label>
                                <input type="password" name="PasswordOne" required class="form-control"
                                       id="inputPasswordOne"
                                       placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPasswordTwo">Confirm Password</label>
                                <input type="password" name="inputPasswordTwo" required class="form-control"
                                       id="inputPasswordTwo"
                                       placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" name="Address" required class="form-control" id="inputAddress"
                                   placeholder="1234 Main St">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="inputCity">City</label>
                                <input type="text" name="City" required class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select required id="inputState" name="inputState" class="form-control">
                                    <option selected value="California">California</option>
                                    <option value="New York">New York</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="Texas">Texas</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">Zip</label>
                                <input name="inputZip" required type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="Check" required id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Agree with terms and conditions.
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info col-sm">Save</button>
                    </form>
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
        const Form = $(".form-class");
        Form.submit(function (event) {
            event.preventDefault();
            Loading.show();
            RegisterUser();
        })
    });
</script>

</body>
</html>
