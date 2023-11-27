<?php
        include("connection.php");

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $lastname = $_POST['lastname'];
            $name = $_POST['name'];
            $email_add = $_POST['email_add'];
            $contact_num = $_POST['contact_num'];
            $job = $_POST['job'];

            //Create a connection
             $conn = new mysqli("localhost", "root", "", "faculty_system");


             $sql = "INSERT INTO staff (lastname,name,email_add,contact_num,job) VALUES ('$lastname','$name','$email_add','$contact_num','$job') ORDER BY DESC";

             mysqli_query($conn,$sql);
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
        <form action = "create_staff.php" method="post">
        <div class="body-container">
            <div class="box-container">
                <div class="container my-5">
                    <h2>Create New Staff</h2>
     
                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Lastname</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="lastname" required>
                            </div>
                        </div>
                    </div>

                    
                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Firstname</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                    </div>


                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Email Address</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="email_add" required>
                            </div>
                        </div>
                    </div>

                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Contact Number</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="contact_num" required>
                            </div>
                        </div>
                    </div>

                    <div class="container-edit">
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Job</label><br>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="job" required>
                            </div>
                        </div>
                    </div>


                
                    <div class="row mb-3">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                                <input type="submit" class="btn btn-primary" value = "Submit">
                        </div>
                        <div class="col-sm-3 d-grid">
                            <a class="btn btn-outline-primary" href="/Staff&Faculty/Admin/staff.php">Back</a>
                        </div>
                    </div>
                
                  
                </div>
            </div>
        </div>
        </form>

    </body>
</html>