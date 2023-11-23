<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff and Faculty Management System</title>

    <link rel="stylesheet" href="/Staff&Faculty/css/dashboard.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>

     <!--icon link-->
     <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!--font style sidemenu_bar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Nosifer&family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    
<!--Schedule-->
    <div class="schedule_container">
        <div class="activity">
        <h2>All Schedule</h2>
         <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Postition</td>
                    <td>Faculty</td>
                    <td>Date</td>
                    <td>Time-In</td>
                    <td>Time-Out</td>
                    <td>Task</td>
                </tr>
            </thead>
            <tbody>
             <?php
                    //Create a connection
                    $connection = new mysqli("localhost", "root", "", "staff&faculty");

                    //Check the connection
                    if($connection->connect_error){
                        die("Connection failed: " .$connection->connect_error);
                    }

                    //reads all rows from database table
                    $sql = "SELECT * FROM schedules";
                    $result = $connection->query($sql);

                    if(!$result){
                        die("Invalid query".$connection->connect_error);
                    }

                    //read data of each row
                    while($row = $result->fetch_assoc()){
                        echo"
                            <tr>
                            <td>$row[name]</td>
                            <td>$row[position]</td>
                            <td>$row[faculty]</td>
                            <td>$row[date]</td>
                            <td>$row[time_in]</td>
                            <td>$row[time_out]</td>
                            <td>$row[task]</td>
                        </tr>
                        ";
                    }
                ?>
                 
            </tbody>
         </table>

         <div class="home">
             <a class="btn btn-primary" href="/Staff&Faculty/User/user-mainpage.php" role="button">Back</a>
         </div>
       </div>
    </div>
    
   
</body>
</html>