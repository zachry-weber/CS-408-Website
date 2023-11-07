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
        <form action="process-signup.php" method="post" id="signup" nonvalidate>
            <div>
	        <label for="name">Name</label>
	        <input type="text" id="name" name="name">
            </div>
            <div>
	        <label for="email">email</label>
		<input type="email" id="email" name="email">
	    </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
        
            <div>
                <label for="password_confirmation">Repeat password</label>
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
