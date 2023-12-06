<?php
session_start();
print_r($_SESSION);

//require_once("/pages/upload.php");

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
    <style>
        .designTop {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin-bottom: 20px;
        }

        .uploads {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .uploads form {
            margin-bottom: 20px;
        }

        .uploads input {
            margin-bottom: 10px;
        }

        .uploads button {
            background-color: #4caf50;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .uploads button:hover {
            background-color: #45a049;
        }

        .uploads h2 {
            color: #333333;
            margin-bottom: 10px;
        }

        .uploads img {
            max-width: 100%;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>

    <header class="head">
        <h1>Upload Your Photos Here!</h1>
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
    <div class="designTop">
        <h2>Select an image you would like to display</h2>
    </div>
    <div class="uploads">
        <form action="/pages/upload.php" method="POST" enctype="multipart/form-data">
	    <input type="file" name="file" id="file">
            <button type="submit" name="submit">Upload Image</button>
        </form>
    </div>
    <footer>
        &copy; 2023 Stiggy Thank You For Visiting!
    </footer>
</body>
</html>
