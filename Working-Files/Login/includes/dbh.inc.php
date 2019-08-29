<?php
$server_name ="localhost";
$dBUsers = "root";
$dBPassword ="";
$dBname ="loginsystem";

$conn = mysqli_connect($server_name, $dBUsers, $dBPassword, $dBname );
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}