<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookie Demo</title>
    </head>
    <body>
        <?php 
        if (isset($_COOKIE['user'])) {
            echo "Welcome back, " . $_COOKIE['user'] . "<br>";
        } else {
        ?>
        
        <form action="welcome.php" method="POST">
            Name: <input type="text" name="name" /><br>
            Password: <input type="password" name="pwd" /><br>
            Remember Me: <input type="checkbox" name="remember" value="ON" /><br>
            <input type="submit" />
        </form>
        <?php 
        }
        ?>
    </body>
</html>
