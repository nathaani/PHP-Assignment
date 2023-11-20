<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['like'])) {

        if (!isset($_SESSION['liked_articles'][$id])) {
            $sql = "UPDATE articles SET likes = likes + 1 WHERE id = $id";
            $pdo->query($sql);

            $_SESSION['liked_articles'][$id] = true;
        } else {
            $sql = "UPDATE articles SET likes = likes - 1 WHERE id = $id";
            $pdo->query($sql);

            unset($_SESSION['liked_articles'][$id]);
        }
    }

    $likeButtonText = isset($_SESSION['liked_articles'][$id]) ? 'Unlike' : 'Like';
    ?> 
    <?php

} else {
    echo "Article ID not provided.";
}
?>
