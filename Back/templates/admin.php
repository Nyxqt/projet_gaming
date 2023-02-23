<?php $title = "Admin"; ?>
<?php ob_start(); ?>

<div class="container-fluid text-center">
    <div class="row">
        <div class="d-flex mt-3">
            <a class="btn btn-primary" href="index.php?action=addAdmin" role="button">
            <i class="fa-solid fa-user-plus"></i>
            <span class="ms-2">Ajouter</span></a>
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
            <?php foreach($ad as $admin) { ?>
                <tr>
                    <th scope="row"><?=$admin['id']?></th>
                    <td><?=$admin['email']?></td>
                    <td><?=$admin['username']?></td>
                    <td><a class="btn btn-warning" href="index.php?action=updAdmin&id=<?=$admin['id']?>" role="button">
                    <span>Modifier</span><i class="fa-solid fa-user-gear ms-2"></i></a>
                    <a class="btn btn-danger" href="index.php?action=delAdmin&id=<?=$admin['id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" role="button">
                    <span>Effacer</span><i class="fa-solid fa-user-minus ms-2"></i></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <!-- PAGINATION -->
        <?php if(isset($_GET['p'])) { ?>
            <div aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if ($page == 1) { echo 'disabled'; } ?>">
                    <a class="page-link" href="index.php?action=admin&p=<?=$previous?>" tabindex="-1" aria-disabled="true">Précédent</a>
                    </li>
                <?php for ($i = $start; $i <= $end; $i++) { ?>
                    <li class="page-item <?= ($page == $i) ? 'active" aria-current="page"' : '"'?>><a class="page-link" href="index.php?=admin&p=<?php echo $i; ?>"><?=$i;?></a></li>
                <?php } ?>
                <li class="page-item <?php if ($page == $num_pages) { echo 'disabled'; } ?>">
                    <a class="page-link" href="index.php?action=admin&p=<?php echo $next ?>">Suivant</a>
                </li>
            </ul>
            </div>
        <?php } ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>