<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Logs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<h1 style = "display: flex; justify-content:center; font-size: 50px; margin-top: 50px;">LOGS</h1>

<table class="table table-dark" style = "width: 900px; margin-top: 50px; position:relative; left: 190px; ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Logs</th>
    
    </tr>
  </thead>
  <tbody>

  <?php
  include("connection.php");

    $sql = "SELECT * FROM logs";
    $result = mysqli_query($conn,$sql);

    $number = 1;

    while($test = mysqli_fetch_assoc($result)){

      echo'
            <tr>
            <td>'.$number.'</td>
            <td>'.$test['log_info'].'</td>
        
          </tr>
      ';

    }


  ?>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <a class="btn btn-primary" href="/Staff&Faculty/Admin/mainpage.php" role="button">Home</a>
</body>
</html>