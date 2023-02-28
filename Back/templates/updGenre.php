<?php $title = "Modifier"; ?>
<?php ob_start(); ?>

	<div class="container-fluid text-center">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form method="POST" action="#">
                    <div class="form-floating mt-5">
                        <textarea class="form-control" name="name" placeholder="Pseudo" id="name" required><?=$name?></textarea>
                        <label for="name">Nom</label>
                    </div>
                    <div class="form-floating mt-2">
                        <select class="form-select" id="floatingSelect" name="enabled" aria-label="Floating label select example">
                            <option selected disabled>Séléctionnez une option</option>
                            <option value="1">Activé</option>
                            <option value="0">Désactivé</option>
                        </select>
                        <label for="floatingSelect">Activation</label>
                    </div>
                    <div class="form-floating mt-2">
                        <select class="form-select" id="floatingSelec" name="id_category" aria-label="Floating label select example">
                            <option selected disabled>Séléctionnez une option</option>
                            <?php
                            foreach($genres as $genre){
                                echo "<option value = ".$genre['id'].'>'.$genre['name'] ."</option>" ;
                            }
                            ?>
                        </select>
                        <label for="floatingSelec">Catégorie</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="hidden" name="upd" value="1" />
                        <input class="btn btn-primary" type="submit" value="Modifier le genre" />
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
	</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>