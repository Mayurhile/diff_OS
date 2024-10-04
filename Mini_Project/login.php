<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from dbusers where username='$username' AND password='$password'";
    // $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $login = true;
            } 
            else{
                $login = true;
            }
        }
        
    } 
    else{
        $showError = true;
    }
}
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OS page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2 class="logo">OS</h2>
        <nav class="navigation">
            <a href="Index.php">Home</a>
            <a href="about.php">About</a>
            <!-- <a href="#">Subscription</a> -->
            <a href="contact.php">Contact</a>
            <button class="btnLogin-popup" href="login.php">Login






























            
            </button>
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close" aria-label="close alert" onclick="window.location.href ='Index.php'"><ion-icon name="close"></ion-icon></span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="login.php" method='POST'> 
                <div class="input-box">
                    <span class="icon"><ion-icon name="user"></ion-icon></span>
                    <input type="text" id="username" name="username" aria-describedby="emailHelp" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="Password" id="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forget Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account <a href="register.php" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
    </div>

 

    <?php
    if($login){
         header ("location: loginsuccess.php");
    }
    if($showError){
         header ("location: loginunsuccess.php");
    }
    ?>


    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>