<?php $title = "Game"; ?>
<?php ob_start(); ?>

<!-- MAIN CONTENT -->

<div class="container-fluid text-center">
    <div class="row">
        <div class="d-flex mt-3">
            <a class="btn btn-primary" href="index.php?action=addGenre" role="button">
            <i class="fa-solid fa-plus"></i>
            <span class="ms-2">Ajouter</span></a>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Description</th>
                    <th scope="col">Activation</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($games as $game) { ?>
                <tr>
                    <th scope="row"><?=$game['g.name']?></th>
                    <td><?=$game['g.description']?></td>
                    <td><?php if ($game['g.available'] == "1") {
                                    echo "Activé";
                                } else {
                                    echo "Désactivé";}?></td>
                    <td><?=$game['genre']?></td>
                    <td><?php if ($game['g.price'] == 0) {
                                    echo "Free to play";
                                } else {
                                    echo number_format($game['g.price'], 2, '. ', '' );}?></td>
                    <td><a class="btn btn-warning" href="index.php?action=updGame&id=<?=$game['g.id']?>" role="button">
                    <span>Modifier</span><i class="fa-solid fa-gear ms-2"></i></i></a>
                    <a class="btn btn-danger" href="index.php?action=delGame&id=<?=$game['g.id']?>" onclick="return(confirm('Voulez-vous supprimer cette entrée ?'));" role="button">
                    <span>Effacer</span><i class="fa-solid fa-triangle-exclamation ms-2"></i></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <!-- END OF MAIN CONTENT -->

        <!-- PAGINATION -->

        <?php if(isset($_GET['p'])) { ?>
            <div aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php if ($page == 1) { echo 'disabled'; } ?>">
                    <a class="page-link" href="index.php?action=game&p=<?=$previous?>" tabindex="-1" aria-disabled="true">Précédent</a>
                    </li>
                <?php for ($i = $start; $i <= $end; $i++) { ?>
                    <li class="page-item <?= ($page == $i) ? 'active" aria-current="page"' : '"'?>><a class="page-link" href="index.php?=game&p=<?=$i; ?>"><?=$i;?></a></li>
                <?php } ?>
                <li class="page-item <?php if ($page == $num_pages) { echo 'disabled'; } ?>">
                    <a class="page-link" href="index.php?action=game&p=<?=$next?>">Suivant</a>
                </li>
            </ul>
            </div>
        <?php } ?>

        <!-- END OF PAGINATION -->

    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>