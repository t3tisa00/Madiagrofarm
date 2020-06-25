<?php
session_start();
$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);

$myusername="madi";
$mypassword="agro";



if ($username == $myusername  && $password == $mypassword) {

    $_SESSION["madiboarfarm"] = "OK";
    header("location:adminenterandview.php");
} else {
    echo"Wrong Username or Password";
    header("Refresh: 5;adminindex.php");
     $_SESSION["madiboarfarm"] = "NOT OK";
}


