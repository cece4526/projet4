<?php $this->title = 'Administration'; ?>

<div class="center">
    <div class="content_center">
        <h3>Administration</h3>
        <a id="bouton4" class="margin" href="../public/index.php">Accueil</a>
        <div class="message">
            <p class="message_text">
                <?=$this->session->show('add_article');?>
                <?= $this->session->show('edit_article'); ?>
                <?= $this->session->show('delete_article'); ?>
                <?= $this->session->show('add_comment'); ?>
                <?= $this->session->show('flag_comment'); ?>
                <?= $this->session->show('delete_comment'); ?>
                <?= $this->session->show('delete_user'); ?>
            </p>
        </div>
        <h4>Articles</h4>
        <a id="bouton4" class="margin" href="../public/index.php?route=addArticle">Nouvel article</a>
        <table class="table-responsive">
            <tr>
            <th scope="row">Id</th>
                <th scope="row">Pseudo</th>
                <th scope="row">Contenu</th>
                <th scope="row">Auteur</th>
                <th scope="row">Date</th>
                <th scope="row">Actions</th>
                
            </tr>
            <?php
            foreach ($articles as $article)
            {
                ?>
                <tr>
                    <td scope="col"><?= htmlspecialchars($article->getId());?></td>
                    <td scope="col"><?= htmlspecialchars($article->getTitle());?></a></td>
                    <td scope="col"><?= substr(strip_tags($article->getContent()), 0, 150);?></td>
                    <td scope="col"><?= htmlspecialchars($article->getAuthor());?></td>
                    <td scope="col">Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
                    <td scope="col">
                        <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                        <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        <h2>Commentaires signalés</h2>
        <table class="table-responsive">
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Pseudo</th>
                <th scope="row">Message</th>
                <th scope="row">Date</th>
                <th scope="row">Actions</th>
            </tr>
            <?php
            foreach ($comments as $comment)
            {
                ?>
                <tr>
                    <td scope="col"><?= htmlspecialchars($comment->getId());?></td>
                    <td scope="col"><?= htmlspecialchars($comment->getPseudo());?></td>
                    <td scope="col"><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                    <td scope="col">Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
                    <td scope="col">
                        <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                        <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

        <h2>Utilisateurs</h2>
        <table class="table-responsive">
            <tr class="td_color">
                <th scope="row">Id</th>
                <th scope="row">Pseudo</th>
                <th scope="row">Date</th>
                <th scope="row">Rôle</th>
                <th scope="row">Actions</th>
            </tr>
            <?php
            foreach ($users as $user)
            {
                ?>
                <tr>
                    <td scope="col"><?= htmlspecialchars($user->getId());?></td>
                    <td scope="col"><?= htmlspecialchars($user->getPseudo());?></td>
                    <td scope="col">Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
                    <td scope="col"><?= htmlspecialchars($user->getRole());?></td>
                    <?php if($user->getRole() === 'admin') { ?>
                        <td scope="col">compte admin</td>
                        <?php }else{?>
                        <td scope="col"><a href="../public/index.php?route=deleteUser&userId=<?= $user->getId(); ?>">Supprimer le compte</a></td>
                        <?php } ?>    
                    </tr>
                <?php
            }
            ?>
        </table>    
        <a id="bouton4" class="margin" href="../public/index.php">Accueil</a>
    </div>
</div>