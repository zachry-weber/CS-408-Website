<?php
session_start();
print_r($_SESSION);

//test
//require_once("/pages/upload.php");
if (isset($_POST["submit"])) {

    if(isset($_FILES['image'])){
      $errors= array();

      $dir = "uploads/";
      $file_name = $_FILES['image']['name'];
      $file_name = $dir. $file_name;
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $tmp = explode('.',$_FILES['image']['name']);
      $file_ext=strtolower(end($tmp));
      
      $extensions= array("jpeg","jpg","png","gif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a GIF, JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp, $file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
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
	    <input type="file" name="image" required>
	    <button type="submit" name="submit">Upload Image</button>
    	</form>
        <h1>Display uploaded Image:</h1>
        <?php if (isset($_FILES["image"])) : ?>
            <img src="<?php echo $file_name; ?>" alt="Uploaded Image">
        <?php endif; ?>
    </div>
    <footer>
        &copy; 2023 Stiggy Thank You For Visiting!
    </footer>
</body>
</html>
