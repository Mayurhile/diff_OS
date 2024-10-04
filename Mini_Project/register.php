<?php
$showError = false;
$showAlert = false;
$showexits = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"]; 
    $password =  $_POST["password"];
    $cpassword = $_POST["cpassword"];


    $existSql = "SELECT * FROM dbusers WHERE username = '$username'";
    $result=mysqli_query($conn,$existSql);
    $rowcount=mysqli_num_rows($result);
    if($rowcount > 0){
        // $exists = true;
        $showexits = true;
    }
    else{
        if($password == $cpassword){
            $sql = "INSERT INTO `dbusers` (`srno`, `username`, `password`, `dt`) VALUES ('null','$username', '$password', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if ($result){
                 $showAlert = true;
            }
        }
        else{
            header("location: unsuccess.php");
            }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2 class="logo">OS</h2>
        <nav class="navigation">
            <a href="Index.php">Home</a>
            <a href="about.html">About</a>
            <!-- <a href="#">Subscription</a> -->
            <a href="contact.php">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>


   

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close" onclick="window.location.href ='Index.php'"></ion-icon></span>
        <div class="form-box register">
            <h2>Registration</h2>

            <form action="register.php" method='POST'>
                <div class="input-box">
                    <span class="icon"><ion-icon name="user"></ion-icon></span>
                    <input type="text" id="username" name="username" aria-describedby="emailHelp" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="Password" id="password" name="password" required>
                    <label for="password" >Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="cpassword" name="cpassword" required>
                    <label for="cpassword">Conform Password</label>
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account <a href="login.php" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <?php
    if($showAlert){
       header("location: success.php");
    }
    ?>
    <?php
    if($showError){
        header("location: unsuccess.php");
    }
    ?>
    <?php
    if($showexits)
    {
        header("location: unexist.php");
    }
    ?>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>