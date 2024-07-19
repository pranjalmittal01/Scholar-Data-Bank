<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "admin";

$con=mysqli_connect("localhost", "root", "", "admin");

if(mysqli_connect_error())
{
    echo "Connection Failed!";
    exit();
}
// else
// {
    // echo "Connected Successfully!";
// }
?>
