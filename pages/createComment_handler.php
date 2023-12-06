<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = htmlspecialchars($_POST['Content']);

    echo($content);
    
    if (empty($content)) {
        echo($content);
        echo "Please enter text";
        exit;
    }

    require_once '../Dao.php';
    $dao = new Dao();
    
    $userId = $_SESSION['user_id'];
    $dao->addComment($userId, $content);
    
    $_SESSION['post_created'] = true;
    header('Location: /pages/gallery.php');
    exit;
} else {
    // Handle other HTTP methods if needed
    echo "Invalid request method.";
    exit;
}
?>
