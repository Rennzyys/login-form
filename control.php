<?php
session_start();
$server_name="localhost";
$username="root";
$password="";
$database_name="dbfirst";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
