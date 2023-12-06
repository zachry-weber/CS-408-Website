<?php
session_start();
print_r($_SESSION);

//require_once("/pages/upload.php");
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./uploads/" . $filename;
 
    $db = mysqli_connect("m7az7525jg6ygibs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", 
        "njmze3cticven8hp", "jr3iy2vu473w7pzb", "sr64mwgqty3s88b0");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO photos (file_path) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($db, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
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
        <form action="" method="POST" enctype="multipart/form-data">
	    <input type="file" name="uploadfile" value="" required>
	    <button type="submit" name="submit">Upload Image</button>
    	</form>
    </div>
    <div id="display-image">
        <?php
        $query = " select * from photos ";
        $result = mysqli_query($db, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./uploads/<?php echo $data['file_path']; ?>">
 
        <?php
        }
        ?>
    </div>
    <footer>
        &copy; 2023 Stiggy Thank You For Visiting!
    </footer>
</body>
</html>
