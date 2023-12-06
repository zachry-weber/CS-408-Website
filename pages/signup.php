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
        .signup {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin-left: 38%;
            margin-top: 4%;
        }

        .signup h2 {
            color: #333333;
            margin-bottom: 20px;
        }

        .signup form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .signup label {
            margin-bottom: 5px;
            color: #555555;
        }

        .signup input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .signup button {
            background-color: #4caf50;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .signup button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header class="head">
        <h1>Signup today!</h1>
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
    <div class="signup">
        <h2>Signup</h2>
        <form action="signup_handler.php" method="post">
            <div>
	        <label for="name">Name</label>
	        <input type="text" id="name" name="name">
            </div>
            <div>
	        <label for="email">Email</label>
		<input type="email" id="email" name="email">
	    </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
        
            <div>
                <label for="password_confirmation">Repeat Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
        
            <button>Sign up</button>
        </form>
    </div>
    <footer>
        &copy; 2023 Stiggy
    </footer>
</body>
</html>
