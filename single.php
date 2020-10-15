<?php
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
        <p>EN construction</p>
        <?php
        $post = new Post;
        $allPosts = $post->getOnePost(1);
        $post = $allPosts->fetch();
        ?>
        <div>
            <h2><?=htmlspecialchars($post->title);?></h2>
            <p><?= htmlspecialchars($post->content);?></p>
            <p><?= htmlspecialchars($post->author);?></p>
            <p>Créé le : <?= htmlspecialchars($post->createdAt);?></p>
        </div>
        <br>
        <?php
        $allPosts->closeCursor();
        ?>
        <a href="home.php">Retour à l'accueil</a>
    </div>
</body>
</html>