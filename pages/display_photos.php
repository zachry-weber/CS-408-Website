<?php
function displayPhotos() {
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

    // Retrieve photos from the database
    $sql = "SELECT * FROM photos";
    $result = $conn->query($sql);

    // Display photos
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="photo">';
            echo '<img src="' . $row["file_path"] . '" alt="Photo">';
            echo '<div class="likes">';
            echo '<button onclick="likePhoto(' . $row["id"] . ')">Like (' . $row["likes"] . ')</button>';
            echo '<button onclick="dislikePhoto(' . $row["id"] . ')">Dislike (' . $row["dislikes"] . ')</button>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No photos available.";
    }

    // Close the database connection
    $conn->close();
}
?>
