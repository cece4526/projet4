<?php $this->title = 'Administration'; ?>

<div class="content_center">
    <h3>Administration</h3>
    <?=$this->session->show('add_article');?>
    <?= $this->session->show('edit_article'); ?>
    <?= $this->session->show('delete_article'); ?>
    <?= $this->session->show('add_comment'); ?>
    <?= $this->session->show('flag_comment'); ?>
    <?= $this->session->show('delete_comment'); ?>
    <?= $this->session->show('delete_user'); ?>
    <h4>Articles</h4>
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    <table>
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
                <td><?= htmlspecialchars($article->getId());?></td>
                <td><?= htmlspecialchars($article->getTitle());?></a></td>
                <td><?= substr(strip_tags($article->getContent()), 0, 150);?></td>
                <td><?= htmlspecialchars($article->getAuthor());?></td>
                <td>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
                <td>
                    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>">Modifier</a>
                    <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>">Supprimer</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h2>Commentaires signalés</h2>
    <table>
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
                <td><?= htmlspecialchars($comment->getId());?></td>
                <td><?= htmlspecialchars($comment->getPseudo());?></td>
                <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
                <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
                <td>
                    <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Désignaler le commentaire</a>
                    <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

    <h2>Utilisateurs</h2>
    <table>
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
                <td><?= htmlspecialchars($user->getId());?></td>
                <td><?= htmlspecialchars($user->getPseudo());?></td>
                <td>Créé le : <?= htmlspecialchars($user->getCreatedAt());?></td>
                <td><?= htmlspecialchars($user->getRole());?></td>
                <?php if($user->getRole() === 'admin') { ?>
                    <td>compte admin</td>
                    <?php }else{?>
                    <td><a href="../public/index.php?route=deleteAccount">Supprimer le compte</a></td>
                    <?php } ?>    
                </tr>
            <?php
        }
        ?>
    </table>    
    <a href="../public/index.php">Retour à l'accueil</a>
</div>