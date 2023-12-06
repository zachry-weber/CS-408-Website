<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $uploadDir = '/uploads/';
        $uploadFile = $uploadDir . basename($_FILES["file"]["name"]);

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile)) {
            include '/pages/save_photo.php';
            savePhoto($uploadFile);
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Please select a file to upload.";
    }
}

header("Location: /pages/gallery.php");
exit();

?>
