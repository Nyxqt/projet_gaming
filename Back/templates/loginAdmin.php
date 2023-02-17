<?php $title = "Admin"; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
        <?= $msg ?>
        <form action="" method="post">
        <form class="row g-3">
            <div class="col-auto">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" name="email" placeholder="email@example.com">
            </div>
            <br />
            <div class="col-auto">
                <label for="password" class="visually-hidden">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
            </div>
            <br />
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Authentification</button>
            </div>
        </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layoutLogin.php') ?>