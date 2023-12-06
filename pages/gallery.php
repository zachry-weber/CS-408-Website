<?php
session_start();
//print_r($_SESSION);
require_once "../Dao.php";
$dao = new dao();

$mostRecentComment = $dao->getMostRecentComment();

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
        <img src="../coolstick.png" alt="fakestig">
        <img src="../realstick-png.webp" alt="realstig">
        <img src="../minecraftstick.webp" alt="minecraftstig">
            <form  class="reply-form" method="post" action="../pages/createComment_handler.php">
                <div style="text-align: center;"><label for="content">Comment:</label></Br>
                <textarea id="content" name="content" rows="10"  style="width: 80%;" required></textarea></div>
                <input type="submit" value="Submit Comment">
            </form>
    </div>
    <div id="repliesContainer" class="section-container">
            <section class="section">
            <?php if ($mostRecentComment): ?>
                <p><?= $mostRecentComment['Content'] ?></p>
            <?php else: ?>
                <p>No posts available</p>
            <?php endif; ?>
            </section>
        
    </div>

    <footer>
        &copy; 2023 Stiggy Thank You For Visiting!
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $('.reply-form').submit(function (e) {
                e.preventDefault(); // Prevent the default form submission

                // Serialize form data
                var formData = $(this).serialize();

                // Perform AJAX call
                $.ajax({
                    type: 'POST',
                    url: '../pages/createComment_handler.php',
                    data: formData,
                    dataType: 'json', // Specify that the expected response is JSON
                    success: function (response) {
                        // Handle the success response
                        console.log('Reply submitted successfully');
                        console.log(response);

                        if (response.success) {
                            // Update the replies section with the new HTML
                            $('#repliesContainer').html(response.replies);

                            //$('.reply-form').toggle();
                            $('#content').val('');
                        } else {
                            console.error('Failed to add reply. Error message: ' + response.message);
                        }
                    },
                    error: function (error) {
                        // Handle errors if any
                        console.error('Error submitting reply');
                        console.error(error);
                    }
                });
            });
    </script>
</body>
</html>
