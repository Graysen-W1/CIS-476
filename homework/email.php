<?php session_start();

var_dump($_REQUEST);

print_r($_SESSION);

echo("Name: " . $_POST['name'] . "<br>");
echo("Email: " . $_POST['email'] . "<br>");