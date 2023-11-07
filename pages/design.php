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
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
    <header class="head">
        <h1>Design and Choose Your Template Here!</h1>
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
    <div class="designTop">
        <h2>Choose your favorite template</h2>
    </div>
    <div class="templates">
        <ul>
            <li>Square</li>
            <li>Circle</li>
            <li>Ellipse</li>
            <li>Rectangle</li>
        </ul>
    </div>
    <footer>
        &copy; 2023 Stiggy Thank You For Visiting!
    </footer>
</body>
</html>
