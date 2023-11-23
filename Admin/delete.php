<?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];

    //Create a connection
    $connection = new mysqli("localhost", "root", "", "staff&faculty");


    $sql = "DELETE FROM schedules WHERE id=$id";
    $connection->query($sql);
    }
    header("location:/Staff&Faculty/Admin/schedule.php");
    exit;
?>