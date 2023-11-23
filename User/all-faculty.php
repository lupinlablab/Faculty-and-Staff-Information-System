
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculties</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php
        include("config.php");

?>  
<div class = "container">
<table class="table table-bordered table-hover " style = "margin-top: 40px; width: 100%;">
  <thead class="table-dark">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Lastname</th>
      <th scope="col">Firstname</th>
      <th scope="col">Email Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Department</th>
      
    </tr>
  </thead>
  <tbody>

  <?php

            $sql = "SELECT * FROM faculties";

            $result = mysqli_query($conn,$sql);

            $number = 1;

            while($test = mysqli_fetch_assoc($result)){

                echo"
                <tr>
                        <th>" . $number . "</th>
                        <td>" . $test['lastname'] . "</td>
                        <td>" . $test['name'] . "</td>
                        <td>" . $test['email_add'] . "</td>
                        <td>" . $test['contact_num'] . "</td>
                        <td>" . $test['department'] . "</td>    
                       
              </tr>
                ";

                $number++;

            }     
  ?>

                   
</tbody>
</table>

<a class="btn btn-primary" href="/Staff&Faculty/Admin/mainpage.php" role="button">Home</a>
<a class="btn btn-primary" href="/Staff&Faculty/Admin/staff.php" role="button">Staff</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>