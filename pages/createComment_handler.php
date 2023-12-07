<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = htmlspecialchars($_POST['content']);

    echo($content);
    if (empty($content)) {
        echo($content);
        echo "Please enter text";
        exit;
    }

    require_once '../Dao.php';
    $dao = new Dao();
    $userId = $_SESSION['user_id'];
    //$userId = $_SESSION['user_id'];
    $dao->addComment($userId, $content);
    $_SESSION['post_created'] = true;
    header('Location: /pages/gallery.php');
    exit;

    $success = $dao->addComment($userId, $content);
    $_SESSION['post_created'] = true;
    if ($success) {
        // Fetch updated replies
        $mostRecentComment = $dao->getMostRecentComment();

        // Output success status and updated replies HTML
        echo json_encode(array('success' => true, 'replies' => renderReplies($mostRecentComment)));
    } else {
        // Output failure status
        echo json_encode(array('success' => false, 'message' => 'Failed to add reply.'));
    }
}
else {
    // Handle other HTTP methods if needed
    echo "Invalid request method.";
    exit;
}
     function renderReplies($mostRecentComment) {
        ob_start(); // Start output buffering

        ?>
    <div id="repliesContainer" class="section-container">
        <section class="section">
            <?php if ($mostRecentComment): ?>
                <p><?= $mostRecentComment['Content'] ?></p>
            <?php else: ?>
                <p>No posts available</p>
            <?php endif; ?>
        </section>
    </div>
    <?php

    return ob_get_clean(); // Return the buffered output as a string
     }
?> 
