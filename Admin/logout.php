<?php
include("connection.php");
session_start();    

$fname =  $_SESSION['fname'];
$lname =  $_SESSION['lname'];

$info = "user: ".$fname." ".$lname." logged out!";
$id =  $_SESSION['user_id'];

$sqlForLog = "INSERT INTO logs (log_info) VALUES ('$info')";
mysqli_query($conn,$sqlForLog);

header("location: ../Admin/login.php");
?>