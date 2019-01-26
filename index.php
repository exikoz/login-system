<?php 
    
    // Allow the config
    define('__CONFIG__', true);
    // Require the config
    require_once "inc/config.php"; 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css" />
    </head>
    <body>

        <div class="uk-section uk-container">
            <?php 
                echo "Hello World Today is: ";
                echo date("Y m d");
            ?>
            <p>
                <a href="/login-form/php_login_course/login.php">Login</a>
                <a href="/login-form/php_login_course/register.php">Register</a>
            </p>
        </div>

        <?php include_once "inc/footer.php"; ?>
    </body>
</html>