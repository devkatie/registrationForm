<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Registration Form Using HTML5 and CSS3</title>
</head>
<body>
    
    <div class="signup-form">
        <img src="user.png">
        <form action="process.php" method="post">
            <input type="text" placeholder="User Name" class="txt" name="Username">
            <input type="password" placeholder="Password" class="txt" name="Password">
            <input type="submit" value="Log In" class="btn" name="login">
            <a href="index.php">< Go Back</a>
        </form>
    </div>

</body>
</html>