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
    
    $dao->addComment($userId, $content);
    $_SESSION['post_created'] = true;

    function renderReplies($replies) {
    ob_start(); // Start output buffering

    if (is_array($replies)) {
        foreach ($replies as $reply) {
            ?>
            <div>
                <section class="section">
                    <h2>Reply</h2></Br>
                    <p><?= $reply['Content'] ?></p></Br>
                    <p>Posted by User ID: <?= $reply['Username'] ?></p>
                    <!-- Add more details or formatting as needed -->
                </section>
            </div>
            <?php
        }
    } else {
        ?>
        <p>No replies available</p>
        <?php
    }

        return ob_get_clean(); // Return the buffered output as a string
    }
    //$userId = $_SESSION['user_id'];
    
    //$_SESSION['post_created'] = true;
    //header('Location: /pages/gallery.php');
    //exit;
} else {
    // Handle other HTTP methods if needed
    echo "Invalid request method.";
    exit;
}
?>
