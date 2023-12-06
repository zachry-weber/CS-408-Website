<?php
session_start();
print_r($_SESSION);
include "../Dao.php";
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
        <h1>Welcome To The Gallery!</h1>
        <img src="../StiggyLogo.png" alt="logo" width="100" height="100" class="style-image">
    </header>
    <div class= "navb">
        <a href="../index.php">Home</a>
        <a href="/pages/design.php">Upload</a>
        <a href="/pages/gallery.php">Gallery</a>
        <a href="/pages/about.php">About</a>
        <a href="/pages/signup.php" class="split">Signup</a>
        <a href="/pages/login.php" class="split">Login</a>
    </div>
    <div class="gallery">
        <h2>Which stick is your favorite?</h2>
    </div>
    <?php
        session_start(); 
        require __DIR__ . "../Dao.php";

        $user_id = $_SESSION["user_id"];
        $sql = "SELECT * FROM photos ORDER BY id DESC";

        $stmt = mysqli_stmt_init($mysqli);
            
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#" class="photo-link">
                    <div>
                        <img src="../uploads/' . $row["imgFullNameGallery"] . '">
                    </div>
                </a>';
            }
        }
    ?>
    
    <footer>
        &copy; 2023 Stiggy Thank You For Visiting!
    </footer>
</body>
</html>
