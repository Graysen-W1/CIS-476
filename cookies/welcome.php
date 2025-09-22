<?php
if (!isset($_POST["name"])) {
    // redirect the browser to index
    header("Location: index.php");
    exit;
}


$usr=$_POST["name"];
$pwd=$_POST["pwd"];

if ($pwd == "bar") {
    echo "Welcome " . $usr;
    if (isset($_POST["remember"]) && $_POST["remember"] == "ON") {
        echo "remember";
        setcookie("user", $usr, time()+3600);
    } else {
        echo "forget";
    }
} else {
    echo "wrong username or password";
}

