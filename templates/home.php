<?php $this->title="Accueil";?>

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