<?php
require '../vendor/autoload.php';
use \App\src\DAO\ArticleDAO;
use \App\src\DAO\CommentDAO;
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
        $article = $allArticles->fetch();
        ?>
        <div>
            <h2><?=htmlspecialchars($article->title);?></h2>
            <p><?= htmlspecialchars($article->content);?></p>
            <p><?= htmlspecialchars($article->author);?></p>
            <p>Créé le : <?= htmlspecialchars($article->createdAt);?></p>
        </div>
        <br>
        <?php
        $allArticles->closeCursor();
        ?>
        <a href="../public/index.php">Retour à l'accueil</a>
        <div id="comments" class="text-left" style="margin-left: 50px;">
            <h3>Commentaires</h3>
            <?php
                while($comment = $allComments->fetch()){
                    ?>
                    <h4><?= htmlspecialchars($comment->pseudo);?></h4>
                    <p><?=htmlspecialchars($comment->content);?></p>
                    <p>Posté le <?= htmlspecialchars($comment->createdAt);?></p>
                    <?php
                }
                $allComments->closeCursor();
            ?>
        </div>
    </div>
</body>
</html>