<?php $title = "Game"; ?>
<?php ob_start(); ?>

<div class="container-fluid mt-5">
    <h3><?=$msg?></h3>
    <form action="#" method="post">
    <div class="row mb-3">
        <div class="col"></div>
        <div class="col">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Nom" name="name" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Nom</label>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="row mb-3">
        <div class="col"></div>
        <div class="col">
            <div class="form-floating">
                <textarea style="height: 20vh;" class="form-control" placeholder="Description" name="description" id="floatingTextarea2"></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="row mb-3">
        <div class="col"></div>
        <div class="col">
            <div class="form-floating">
                <select class="form-select" id="floatingSelect" name="available" aria-label="Floating label select example">
                    <option selected disabled>Séléctionnez une option</option>
                    <option value="true">Activé</option>
                    <option value="false">Désactivé</option>
                </select>
                <label for="floatingSelect">Activation</label>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="row mb-3">
        <div class="col"></div>
        <div class="col">
            <div class="form-floating">
                <select class="form-select" id="floatingSelec" name="id_genre" aria-label="Floating label select example">
                    <option selected disabled>Séléctionnez une option</option>
                    <?php
                    foreach($genres as $genre){
                        echo "<option value = ".$genre['id'].'>'.$genre['name'] ."</option>" ;
                    }
                    ?>
                </select>
                <label for="floatingSelec">Catégorie</label>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="row mb-3">
        <div class="col"></div>
        <div class="col">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Prix" name="price" id="floatingTextarea3"></textarea>
                <label for="floatingTextarea3">Prix</label>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <div class="row text-center">
        <div class="col"></div>
        <div class="col"><button type="submit" name="submit" class="btn btn-primary">Créer</button></div>
        <div class="col"></div>
    </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>