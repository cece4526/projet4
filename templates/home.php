<?php
use App\src\DAO\ArticleDAO;
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
        $article = new \App\src\DAO\ArticleDAO();;
        $allArticles = $article->getAllArticles();
        while($article = $allArticles->fetch())
        {
            ?>
            <div>
                <h2><a href="../public/index.php?route=article&articleId=<?=htmlspecialchars($article->id);?>"></a><?=htmlspecialchars($article->title);?></h2>
                <p><?=htmlspecialchars($article->content);?></p>
                <p><?=htmlspecialchars($article->author);?></p>
                <p><?=htmlspecialchars($article->createdAt);?></p>
            </div>
            <br>
            <?php
        }
        $allArticles->closeCursor();
        ?>
    </div>
</body>
</html>