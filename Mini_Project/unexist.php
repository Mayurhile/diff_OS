<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_pop.css">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <button type="submit" class="btn">Submit</button>
        <div class="popup" id="popup">
            <img src="unsuccess.jpg" alt="success">
            <h2>Oops!!</h2>
            <p>Username already exists.</p> 
            <button type="button" onclick="window.location.href ='register.php'">OK</button>
        </div>
    </div>
</body>
</html>