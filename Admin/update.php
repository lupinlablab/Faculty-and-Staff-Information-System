<?php
session_start();
     if($_SERVER['REQUEST_METHOD'] == "POST"){
                 $id = $_SESSION['worker_id'];
                 $name = $_POST['name'];
                 $position = $_POST['position'];
                 $faculty = $_POST['faculty'];
                 $date = $_POST['date'];
                 $time_in = $_POST['time_in'];
                 $time_out = $_POST['time_out'];
                 $task = $_POST['task'];

                //Create a connection
                $connection = new mysqli("localhost", "root", "", "staff&faculty");


                $sql = "UPDATE schedules SET name = '$name', position = '$position', faculty = '$faculty', date = '$date', time_in = '$time_in', time_out = '$time_out', task = '$task' WHERE id=$id";
                $connection->query($sql);
        }
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Staff and Faculty Management System</title>

            <link rel="stylesheet" href="/Staff&Faculty/css/dashboard.css"/>

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>

            <!--font style sidemenu_bar-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Nosifer&family=Playfair+Display&display=swap" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        </head>
    <body>
        <form action = "create.php" method="post">
        <div class="body-container">
            <div class="box-container">
                <div class="container my-5">
                    <h2>Update Schedule</h2>
     
                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Name</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                    </div>


                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Position</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="position" required>
                            </div>
                        </div>
                    </div>

                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Faculty</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="faculty" required>
                            </div>
                        </div>
                    </div>

                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Date</label><br>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" name="date" required>
                            </div>
                        </div>
                    </div>


                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Time-In</label><br>
                            <div class="col-sm-6">
                                <input type="time" class="form-control" name="time_in" required>
                            </div>
                        </div>
                    </div>

                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Time-Out</label><br>
                            <div class="col-sm-6">
                                <input type="time" class="form-control" name="time_out" required>
                            </div>
                        </div>
                    </div>

                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Task</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="task" required>
                            </div>
                        </div>
                    </div>
                    
                
                    <div class="row mb-3">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                                <input type="submit" class="btn btn-primary" value = "Submit">
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a class="btn btn-outline-primary" href="/Staff&Faculty/Admin/schedule.php">Back</a>
                        </div>
                    </div>
                
                  
                </div>
            </div>
        </div>
        </form>

    </body>
</html>