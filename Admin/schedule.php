<?php 
session_start();
?>
<!DOCTYPE html
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
<form action = "schedule.php" method = "post">

<!--Schedule-->
<!--<div class = "x" style = " display: flex;">
<input type = "text"  class = "form-control" style = " width:250px;" name = "searchValueUp"> 
<input type = "button" value = "SEARCH" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#searchBTN">-->

</div>

<div class="schedule_container">
        <div class="activity">
        <h1>Schedule</h1>
            <a class="btn btn-primary" href="/Staff&Faculty/Admin/create.php" role="button">Create New Schedule</a>
            <br>

            
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

                        $_SESSION['worker_id'] = $row['id'];

                        echo"
                            <tr>
                            <td>$row[name]</td>
                            <td>$row[position]</td>
                            <td>$row[faculty]</td>
                            <td>$row[date]</td>
                            <td>$row[time_in]</td>
                            <td>$row[time_out]</td>
                            <td>$row[task]</td>
                            <td>
                                <a class='btn btn-success btn-sm' href='/Staff&Faculty/Admin/update.php?id=$row[id]'>Update</a>
                                
                                <a class='btn btn-danger btn-sm' href='/Staff&Faculty/Admin/delete.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>
                        ";
                    }
                ?>
                 
            </tbody>
         </table>

         <div class="home">
             <a class="btn btn-primary" href="/Staff&Faculty/Admin/mainpage.php" role="button">Home</a>
             <a class="btn btn-primary" href="/Staff&Faculty/Admin/all-sched.php" role="button">View All</a>
         </div>
       </div>
    </div>

<!--

    <div class="modal fade" id="searchBTN" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style = " width: 900px; position: relative; left: -200px; top: 60px;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Search Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                        <?php
                                if($_SERVER['REQUEST_METHOD'] == "POST"){
                                        
                                    $searchValue = isset($_POST['searchValueUp']);


                                   

                                    $sql = "SELECT name,position,faculty,time_in,time_out,task FROM schedules WHERE date = '$searchValue'";

                                    $result = mysqli_query($connection,$sql);

                                    echo "
                                    <table class='table table-bordered table-hover table-striped'>
                                    <thead class='table-dark'>
                                      <tr>
                                        <th scope='col'>name</th>
                                        <th scope='col'>position</th>
                                        <th scope='col'>faculty</th>
                                       
                                        <th scope='col'>time_in</th>
                                        <th scope='col'>time_out</th>
                                        <th scope='col'>task</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                    ";

                                    while($test = mysqli_fetch_assoc($result)){

                                        echo'
                                        <tr>
                                        <td scope="row">'.$test['name'].'</td>
                                        <td>'.$test['position'].'</td>
                                        <td>'.$test['faculty'].'</td>
                                        
                                        <td>'.$test['time_in'].'</td>
                                        <td>'.$test['time_out'].'</td>
                                        <td>'.$test['task'].'</td>
                                    
                                      </tr>
                                        ';
                                        
                                    }

                                    echo '
                                    
                                    </tbody>
                                    </table>
                                    
                                    ';
                                
                                }
                        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>-->
    </div>
  </div>
</div>
    
   


</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>