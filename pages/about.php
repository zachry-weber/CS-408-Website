<?php
session_start();
print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stiggy</title>
    <link rel="shortcut icon" href="../StiggyLogo.png">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
    <header class="head">
        <h1>About Me!</h1>
        <img src="../StiggyLogo.png" alt="logo" width="100" height="100" class="style-image">
    </header>
    <div class= "navb">
        <a href="../index.php">Home</a>
        <a href="/pages/design.php">Design</a>
        <a href="/pages/gallery.php">Gallery</a>
        <a href="/pages/about.php">About</a>
        <a href="/pages/signup.php" class="split">Signup</a>
        <a href="/pages/login.php" class="split">Login</a>
    </div>
    <div class="aboutMe">
        <img src="../picofme.JPG" alt="me">
        <p>Hi my name is Zachry Weber, I am 23 years old and currently attend
            Boise State University. My hobbies include playing disc golf, ultimate
            frisbee, fishing, golfing, and hanging out with friends.
        </p>
    </div>
    <div class="meVideo">
      <video controls loop>
      <source src="../discgolf.MP4" type="video/mp4">
      </video>  
    </div>
    <footer>
        &copy; 2023 Stiggy Thank You For Visiting!
    </footer>
</body>
</html>
