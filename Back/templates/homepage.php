<?php $title = "Homepage"; ?>
<?php ob_start(); ?>

<div class="container-fluid text-center">
  <div class="row">
    <div class="col p-2">
      <span class="fs-2 title_ff text-white">Nombre d'utilisateurs</span>
      <p class="text_ff text-white"><?=TotalUsers()?></p>
    </div>
    <div class="col p-2">
      <span class="fs-2 title_ff text-white">Nombre de produits</span>
      <p class="text_ff text-white"><?=totalProducts()?></p>
    </div>
    <div class="col p-2">
      <span class="fs-2 title_ff text-white">Nombre de commandes</span>
      <p class="text_ff text-white"><?=totalOrders()?></p>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>