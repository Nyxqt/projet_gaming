<?php $title = "Homepage"; ?>
<?php ob_start(); ?>

  
  <!-- Main Content -->
  

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>