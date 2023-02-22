<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
 <head>
 <meta charset="utf-8" />
 <title><?= $title ?></title>

 <!-- Adding CSS links -->
 <?php require('../assets/lib/externals.php') ?>

 </head>
 <body>
 <div class="container-fluid d-flex">
<div class="d-flex flex-column flex-shrink-0 text-white p-3" style="width: 280px; height: 100vh;">
    <a href="index.php?action=home" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <i class="fa-solid fa-database fa-xl"></i>
    <span class="fs-4 ms-2">Gestion</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php?action=home" class="nav-link hover_yellow">
        <i class="fa-solid fa-house"></i>
          Accueil
        </a>
      </li>
      <li>
        <a href="index.php?action=category&p=1" class="nav-link  hover_yellow">
        <i class="fa-solid fa-chevron-right"></i>
          Catégories
        </a>
      </li>
      <li>
        <a href="index.php?action=genre&p=1" class="nav-link  hover_yellow">
        <i class="fa-solid fa-chevron-right"></i>
          Genres
        </a>
      </li>
      <li>
        <a href="#" class="nav-link  hover_yellow">
        <i class="fa-solid fa-chevron-right"></i>
          Jeux
        </a>
      </li>
      <li>
        <a href="#" class="nav-link  hover_yellow">
        <i class="fa-solid fa-image"></i>
          Images
        </a>
      </li>
      <li>
        <a href="index.php?action=admin&p=1" class="nav-link  hover_yellow">
        <i class="fa-solid fa-user"></i>
          Administrateurs
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?='Bonjour '.getUser();?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">
        <i class="fa-solid fa-gear"></i>
            Configuration
        </a>
        </li>
        <li><a class="dropdown-item" href="index.php?action=logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            Déconnexion
        </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="vr" style="height: 100vh;"></div>
 <?= $content ?>
 </div>

 <!-- Adding Script -->
 <?php require('../assets/lib/externalsJS.php') ?>
 
 </body>
</html>