<?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];

    //Create a connection
    $connection = new mysqli("localhost", "root", "", "faculty_system");


    $sql = "DELETE FROM staff WHERE id=$id";
    $connection->query($sql);
    }
    header("location:staff.php");
    exit;
?>