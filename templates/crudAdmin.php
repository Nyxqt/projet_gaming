<?php $title = "Admin"; ?>
<?php ob_start(); ?>
<div class="container mt-5">
    <form action="#" method="post">
    <div class="row mb-3">
        <div class="col"></div>
        <label for="inputNickname" class="col-lg-2 col-form-label">Pseudo</label>
        <div class="col-lg-3">
        <input type="email" class="form-control" id="inputNickname">
        </div>
        <div class="col"></div>
    </div>
    <div class="row mb-3">
        <div class="col"></div>
        <label for="inputEmail" class="col-lg-2 col-form-label">Email</label>
        <div class="col-lg-3">
        <input type="email" class="form-control" id="inputEmail">
        </div>
        <div class="col"></div>
    </div>
    <div class="row mb-3">
        <div class="col"></div>
        <label for="inputPassword" class="col-lg-2 col-form-label">Mot de passe</label>
        <div class="col-lg-3">
        <input type="password" class="form-control" id="inputPassword">
        </div>
        <div class="col"></div>
    </div>
    <div class="row mb-3">
        <div class="col"></div>
        <label for="inputConfirm" class="col-lg-2 col-form-label">Confirmer le mot de passe</label>
        <div class="col-lg-3">
        <input type="password" class="form-control" id="inputConfirm">
        </div>
        <div class="col"></div>
    </div>
    <div class="row text-center">
        <div class="col"></div>
        <div class="col"><button type="submit" class="btn btn-primary">Sign in</button></div>
        <div class="col"></div>
    </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>