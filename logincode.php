<?php
session_start();
$server_name="localhost";
$username="root";
$password="";
$database_name="dbfirst";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}else "Connected";

if(isset($_POST['uname']) && isset($_POST['pin'])){

    function validata($data){
        $data = trim ($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validata($_POST['uname']);
    $pin = validata ($_POST['pin']);

    if (empty($uname)){
        header("location: login.php?error=Username Required");
        exit();

    } else if (empty($pin)) {
        header("location: login.php?error=PIN Code Required");
        exit();

    }else {
        $sql = "SELECT * FROM accounts WHERE uname='$uname' AND pin='$pin' limit 1";

        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) === 1) {
            header("location: loginpage.html");
        } else {
            header("location: login.php?error=Incorrect uname or pinword");
            exit();
        }
    }

}else {

    header("location: login.php");
    exit();

}