<?php $this->title="Accueil";?>

<?= $this->session->show('register'); ?>
<?= $this->session->show('login'); ?>
<?= $this->session->show('logout'); ?>
<?= $this->session->show('delete_account'); ?>
<br>
<?php
if ($this->session->get('pseudo')) {
    ?>
    <nav id="menu_dir" class="col navbar navbar-expand-lg">
        <button id="button_menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="button">Menu</span>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse menu_dir">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="../public/index.php?route=logout">Déconnexion</a></li>
                <li class="nav-item active"><a class="nav-link" href="../public/index.php?route=profile">Profil</a></li>
                <?php if($this->session->get('role') === 'admin') { ?>
                <li class="nav-item active"><a class="nav-link" href="../public/index.php?route=administration">Administration</a></li>
            </ul>
        </div>
        <?php } ?>
    </nav>
    <?php
} 
else {
    ?>
    <nav id="menu_dir" class="col navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="button">Menu</span>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse menu_dir">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="../public/index.php?route=register">Inscription</a></li>
                <li class="nav-item active"><a class="nav-link" href="../public/index.php?route=login">Connexion</a></li>
            </ul>
        </div>
    </nav>
    <?php
}
?>
<?php
       
foreach($allArticles as $article)
{
    ?>
    <article id="color_article" class="card_home_border card card_home_center ">
        <div class="card-body card_home_width">
            <h2 class="card-title h2"><?=htmlspecialchars($article->getTitle());?></h2>
            <p class="card-text"><?=substr(strip_tags($article->getContent(), '<br><strong><em><p>'), 0, 150);?>
            <a href="../public/index.php?route=article&articleId=<?=htmlspecialchars($article->getId());?>">lire la suite...</a>
            </p>
            <p class="card-text"><?=htmlspecialchars($article->getAuthor());?></p>
            <p class="card-text"><?=htmlspecialchars($article->getCreatedAt());?></p>
        </div>        
    </article>
    <br>
    <?php
}
?>