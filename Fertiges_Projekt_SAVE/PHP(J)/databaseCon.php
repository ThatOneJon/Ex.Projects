<?php


$hostname = 'localhost';
$database = 'ebusiness029';
$username = 'ebusiness029';
$password = 'gGvHzwEnss';


$conn = mysqli_connect('localhost','ebusiness029','gGvHzwEnss','ebusiness029');

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}
