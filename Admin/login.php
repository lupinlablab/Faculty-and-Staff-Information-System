<?php
    include("connection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
    
        if (isset($row["type"])) {
            if ($row["type"] == "user") {
                $_SESSION["username"] = $username;
                header("location: mainpage.php");

            } elseif ($row["type"] == "admin") {
                $_SESSION["username"] = $username;
                header("location: mainpage.php");
            }
        } else {
            $error_message = "User type is not defined for the given user.";
        }
    } else {
        $error_message = "Username or password is incorrect.";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="/Staff&Faculty/css/login.css">

    <!--font style sidemenu_bar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Nosifer&family=Playfair+Display&display=swap" rel="stylesheet">

</head>
<body>

    <div class="login">
        <h3>Login</h3>

        <form method="POST" >
            <div class="input_box">
                <input type="text" placeholder="Username" name="Username" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="password" placeholder="Password" name="Password" autocomplete="off" required>
            </div>
            
            <div>
                <button type="submit" class="button">Login</button>
                
            </div>

            <div class="link">
            <p>
             Not yet Registered?<a href="signup.php">&nbsp;Register</a>
            </p>
            </div> <br>
        </form>
    </div>


</body>
</html>