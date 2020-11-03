<?php $this->title="Accueil";?>

<h1>Mon blog</h1>
<p>En construction</p>
<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<br>
<?php
if ($this->session->get('pseudo')) {
    ?>
    <div class="menu"><a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <?php if($this->session->get('role') === 'admin') { ?>
        <a href="../public/index.php?route=administration">Administration</a>
    <?php } ?>
    </div>
    <?php
} else {
    ?>
    <div class="menu">
    <a href="../public/index.php?route=register">Inscription</a>
    <a href="../public/index.php?route=login">Connexion</a>
    </div>
    <?php
}
?>
<?php
       
foreach($allArticles as $article)
{
    ?>
    <div>
        <h2><a href="../public/index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>"><?=htmlspecialchars($article->getTitle());?></a></h2>
        <p><?=substr(strip_tags($article->getContent(), '<br><strong><em><p>'), 0, 150);?></p>
        <p><?=htmlspecialchars($article->getAuthor());?></p>
        <p><?=htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>
    <?php
}
?>