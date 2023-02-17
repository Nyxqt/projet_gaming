<?php $title = "Admin"; ?>
<?php ob_start(); ?>

<div class="container-fluid text-center">
    <div class="row">
        <div class="d-flex">
        <a class="btn btn-primary" href="index.php?/=admin_add" role="button">
        <i class="fa-solid fa-user-plus"></i>
        <span>Ajouter</span></a>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($admins as $admin) { ?>
                <tr>
                    <th scope="row"><?=$admin['id']?></th>
                    <td><?=$admin['email']?></td>
                    <td><?=$admin['username']?></td>
                    <td><a class="btn btn-warning" href="index.php?/=admin_upd&id=<?=$admin['id']?>" role="button">
                    <span>Modifier</span><i class="fa-solid fa-user-gear ms-2"></i></a>
                    <a class="btn btn-danger" href="index.php?/=admin&p=1&id=<?=$admin['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" role="button">
                    <span>Effacer</span><i class="fa-solid fa-user-minus ms-2"></i></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>