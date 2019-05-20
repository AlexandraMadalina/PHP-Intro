<?php
session_start();
if(isset($_POST['login-submit'])){
$name = "madalina";
$password = "becode";

if($_POST['username']=="madalina" && $_POST['pwd']=="becode"){
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    header("Location: ../login.php");
    exit();
}
header("Location: ../login.php");
    exit();

}