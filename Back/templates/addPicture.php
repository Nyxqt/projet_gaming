<?php $title = "Picture"; ?>
<?php ob_start(); ?>

<div class="container-fluid mt-5">
    <h3><?=$msg?></h3>
    <form action="#" method="post">
    <div class="row mb-3">
        <div class="col"></div>
        <div class="col">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="picture" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="row text-center">
        <div class="col"></div>
        <div class="col"><button type="submit" name="submit" class="btn btn-primary">Ajouter</button></div>
        <div class="col"></div>
    </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>