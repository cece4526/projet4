<?php
//On inclut le fichier dont on a besoin
require 'DataBase.php';
require 'Post.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
</head>
<body>
    <div>
        <h1>Mon blog</h1>
        <p>En construction</p>
        <?php
        $post = new Post();
        $allPosts = $post->getAllPosts();
        while($post = $allPosts->fetch())
        {
            ?>
            <div>
                <h2><?=htmlspecialchars($post['title']);?></h2>
                <p><?=htmlspecialchars($post['content']);?></p>
                <p><?=htmlspecialchars($post['author']);?></p>
                <p><?=htmlspecialchars($post['createdAt']);?></p>
            </div>
            <br>
            <?php
        }
        $post->closeCursor();
        ?>
    </div>
</body>
</html>