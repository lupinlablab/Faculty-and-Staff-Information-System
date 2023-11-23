<?php
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email_address = $_POST['email_address'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpass = $_POST['cpass'];
        


    }


    


   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup User</title>
    <link rel="stylesheet" href="/Staff&Faculty/css/login.css">

     <!--font style sidemenu_bar-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Nosifer&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>
<body>
    

    <div class="sign-up">
        <h3>Signup</h3>

        <form action = "signup.php" method="post">
            <div class="input_box">
                <input type="text" placeholder="First Name" name="fname" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="text" placeholder="Last Name" name="lname" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="email" placeholder="Email Address" name="email" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="text" placeholder="Username" name="username" autocomplete="off" required>     
            </div>

            <div class="input_box">
                <input type="password" placeholder="Password" name="password" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="password" placeholder="Confirm Password" name="confirm_password" autocomplete="off" required>
            </div>

            <div>
            <input type="submit"  value = "Sign up" class="btn btn-success" id = "signup" style = "position:relative; left: 160px;   ">
            </div>

            <div class="link">
                <p>
                    Already have an account? <a href="login.php">Login</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>