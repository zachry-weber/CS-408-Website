<?php
function savePhoto($filePath) {
    // Connection to the database
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert photo information into the database
    $sql = "INSERT INTO photos (file_path, likes, dislikes) VALUES ('$filePath', 0, 0)";
    
    if ($conn->query($sql) === TRUE) {
        echo "File uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
