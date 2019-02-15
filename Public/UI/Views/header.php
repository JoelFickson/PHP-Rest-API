<?php
/**
 * Created by PhpStorm.
 * User: JFNgozo
 * Date: 2/14/2019
 * Time: 9:14 PM
 */

StaticFilesLoader::LoadMyCSS();

$APP_INDEX = Env::APP_HOME;
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php
    echo $APP_INDEX;

    ?>">JOEL REST</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php
                echo "{$APP_INDEX}";

                ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php
                echo "{$APP_INDEX}features/index";


                ?>">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="
                <?php
                echo "{$APP_INDEX}register";


                ?>

">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="
                <?php
                echo "{$APP_INDEX}login";


                ?>

">Login</a>
            </li>
        </ul>

    </div>
</nav>
