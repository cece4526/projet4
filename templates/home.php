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
       
        foreach($allArticles as $article)
        {
            ?>
            <div>
                <h2><a href="../public/index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>"></a><?=htmlspecialchars($article->getTitle());?></h2>
                <p><?=htmlspecialchars($article->getContent());?></p>
                <p><?=htmlspecialchars($article->getAuthor());?></p>
                <p><?=htmlspecialchars($article->getCreatedAt());?></p>
            </div>
            <br>
            <?php
        }
        ?>
    </div>
</body>
</html>