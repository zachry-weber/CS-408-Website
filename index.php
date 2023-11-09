<?php
session_start();
require_once "../Dao.php";
$dao = new dao();
echo("works");
if (isset($_SESSION["user_id"])){
    $user = $dao->getUser($_SESSION["user_id"]);
}


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
        <h1>Welcome To Stiggy!</h1>
        <img src="StiggyLogo.png" alt="logo" width="100" height="100" class="style-image">
    </header>
    <div class= "navb">
        <a href="../index.php">Home</a>
        <a href="/pages/design.php">Design</a>
        <a href="/pages/gallery.php">Gallery</a>
 	<a href="/pages/about.php">About</a>
        <a href="/pages/signup.php" class="split">Sign Up</a>
	<a href="/pages/login.php" class="split">Login</a>
    </div>
    <div class="create">
        <h2>Design custom stickers here!</h2>
        <input type="button" value="Design Now" onclick="location='/pages/design.php'" />
    </div>
    <div class="easy">
        <h2>Create in 3 easy steps</h2>
        <ul>
            <li>1. Design and choose a template</li>
            <li>2. Upload a Photo</li>
            <li>3. View in Gallery</li>
        </ul>
    </div>
    <div class="photo">
        <h2>Contact Me</h2>
        <p>Email: zachryweber@u.boisestate.edu</p>
        <p>Phone: 541-385-0906</p>
    </div>
    <footer>
        &copy; 2023 Stiggy Thank You For Visiting! 
    </footer>
</body>
</html>
