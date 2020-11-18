<?php $this->title = 'Mon profil'; ?>
<div class="content_center">
    <h3>Profil</h3>
    <?= $this->session->show('update_password'); ?>
    <div class="content_center">
        <h2><?= $this->session->get('pseudo'); ?></h2>
        <p><?= $this->session->get('role'); ?></p>
        <a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a>
        <br>
        <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
    </div>
    <br>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>