<?php $this->title ="Article"; ?>
<a id="bouton4" class="margin" href="../public/index.php">Accueil</a>
<article class="card_home_border card_home_width card_home_color">
    <h2><?=htmlspecialchars($article->getTitle());?></h2>
    <p><?= strip_tags($article->getContent(), '<br><strong><em><p><iframe>');?></p>
    <p><?= htmlspecialchars($article->getAuthor());?></p>
    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
</article>
<?php if($this->session->get('role') === 'admin') { ?>
    <div class='actions'>
        <a id="bouton4" href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
        <a id="bouton4" href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
    </div>
<?php } ?>

<div id="comments" class="text-left" style="margin-left: 50px;">
    <?php if($this->session->get('role') === 'user' OR $this->session->get('role') === 'admin') {?>
        <h3>Ajouter un commentaire</h3> 
       <?php include('Form_comment.php'); ?> 
    <?php }?>
    <h3>Commentaires</h3>
    <?php
        foreach($allComments as $comment){?>
            <div class="card_home_border card_home_color">
            <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
            <p><?=htmlspecialchars($comment->getContent());?></p>
            <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
            <?php
            if($comment->isFlag()) {?>
                <p>Ce commentaire a déjà été signalé</p>
            <?php } 
            elseif ($this->session->get('pseudo') == $comment->getPseudo() OR $this->session->get('role') === 'admin') { ?>
                <p><a id="bouton4" href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
                <p><a id="bouton4" href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
               <?php }
            else { ?>
                <p><a id="bouton4" href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php } ?>
            </div>
        <?php }
        ;?>
        
</div>
<a id="bouton4" class="margin" href="../public/index.php">Accueil</a>