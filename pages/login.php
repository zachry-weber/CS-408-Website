<?php
session_start();

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
        .login {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin-left: 38%;
            margin-top: 8%;
        }

        .login h2 {
            color: #333333;
            margin-bottom: 20px;
        }

        .login form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login label {
            margin-bottom: 5px;
            color: #555555;
        }

        .login input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .login button {
            background-color: #4caf50;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .login button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header class="head">
        <h1>Returning User? Login Here!</h1>
        <img src="../StiggyLogo.png" alt="logo" width="100" height="100" class="style-image">
    </header>
    <div class= "navb">
        <a href="../index.php">Home</a>
        <a href="/pages/design.php">Design</a>
        <a href="/pages/gallery.php">Gallery</a>
        <a href="/pages/about.php">About</a>
        <a href="/pages/signup.php" class="split">Sign Up</a>
        <a href="/pages/login.php" class="split">Login</a>
    </div>
    <div class="login">
        <h2>Login</h2>
        <form method="post" action="login_handler.php">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        
            <button>Log in</button>
        </form>
    </div>
    <footer>
        &copy; 2023 Stiggy
    </footer>
</body>
</html>
