<?php

function check_login($con)
{

       if(isset($_SESSION['username']))
       {
        $username = $_SESSION['username'];
        $query = "SELECT * FROM registrations WHERE username = '$username' limit 1";
        
        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $registrations = mysqli_fetch_assoc($result);
            return $registrations;
        }
       }

       //redirect to login
       header("location: login.php");
       die;

}
?>