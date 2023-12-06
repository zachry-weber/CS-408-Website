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
        // <h2>Upload your photos here</h2>
    </div>
    <div class="uploads">
        <form action="/pages/upload.php" method="POST" enctype="multipart/form-data">
	    <input type="file" name="fileToUpload" id="fileToUpload>
            <input type="submit" name="submit" value="Upload">
        </form>
        <h1>Display uploaded Image:</h1>
        <?php if (isset($_FILES["image"]) && $uploadOk == 1) : ?>
            <img src="<?php echo $targetFile; ?>" alt="Uploaded Image">
        <?php endif; ?>
    </div>
    <footer>
        &copy; 2023 Stiggy Thank You For Visiting!
    </footer>
</body>
</html>
