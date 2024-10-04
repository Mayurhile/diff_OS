<?php
$showError = false;
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbhelp.php';
    $username = $_POST["username"]; 
    $password =  $_POST["email"];
    $cpassword = $_POST["message"];


    // $existSql = "SELECT * FROM dbusers WHERE username = '$username'";
    // $result=mysqli_query($conn,$existSql);
    // $rowcount=mysqli_num_rows($result);
    // if($rowcount > 0){
        // $exists = true;'
    $sql = "INSERT INTO 'help' ('srno','username','email','message','dt') VALUES ('null','$username','$password','$cpassword',current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if($result = true){
        header("location: index.php");
    }
    
    else{
        header("location: register.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2 class="logo">OS</h2>
        <nav class="navigation">
            <a href="logout.php">Home</a>
            <a href="aboutlogout.php">About</a>
            <!-- <a href="#">Subscription</a> -->
            <a href="contact.php">Contact</a>
            <button class="btnLogin-popup" onclick="window.location.href ='login.php'">Logout</button>
        </nav>
    </header>


    <div class="wrapper">
    <span class="icon-close" aria-label="close alert" onclick="window.location.href ='Index.php'"><ion-icon name="close"></ion-icon></span>
        
        <div class="form-box contact ">
            <h2>Contact Form</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="user"></ion-icon></span>
                    <input type="text" id="username" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label for="email" >Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="text"></ion-icon></span>
                    <input type="text" id="message" name="message" required>
                    <label for="message">Message</label>
                </div>
                <button type="submit" class="btn">SUBMIT</button>
            </form>
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
</body>
</html>
