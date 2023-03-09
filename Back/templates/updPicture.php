<?php $title = "Modifier"; ?>
<?php ob_start(); ?>


	<div class="container-fluid text-center">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form method="POST" action="#">
                    <div class="form-floating mt-2">
                        <textarea class="form-control" name="name" placeholder="Pseudo" id="name" required><?=$name?></textarea>
                        <label for="name">Nom</label>
                    </div>
                    <img class="picBackOffice mt-2" src="<?=$picture?>">
                    <div class="form-floating mt-2">
                        <input type="hidden" name="upd" value="1" />
                        <input class="btn btn-primary" type="submit" value="Modifier" />
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
		
	</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>