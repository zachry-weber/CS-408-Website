<?php
function savePhoto($filePath) {
    // Connection to the database
    $servername = "m7az7525jg6ygibs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "njmze3cticven8hp";
    $password = "jr3iy2vu473w7pzb";
    $dbname = "sr64mwgqty3s88b0";

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
