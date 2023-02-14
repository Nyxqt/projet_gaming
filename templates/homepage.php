<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyx Gaming</title>
    <?php require('../assets/lib/externals.php') ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg p-0 sticky-top">
            <div class="container-fluid d-flex justify-content-between p-0" data-bs-theme="dark">
                <a class="navbar-brand brand_title d-flex flex-column text-center ms-2" href="#">
                    <span class="title_top">Nyx</span> 
                    <span class="title_bot mt-n1">gaming</span>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link title_ff hover_yellow fs-2 current_page" href="#">Stratégie</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link title_ff hover_yellow fs-2" href="#">Multijoueur</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link title_ff hover_yellow fs-2" href="#">Action</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link title_ff hover_yellow fs-2" href="#">Indé</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link title_ff hover_yellow fs-2" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link title_ff hover_yellow fs-2" href="#"><i class="fa-solid fa-magnifying-glass fa-xs"></i></a>
                    </li>
                </ul>
                <div class="navbar-nav me-5 d-flex">
                    <a href="#"><i class="fa-solid fa-cart-shopping fa-2xl me-3 hover_yellow"></i></a>
                    <a href="#"><i class="fa-solid fa-circle-user fa-2xl ms-2 hover_yellow"></i></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="main_highlight container-fluid p-0">
            <picture>
                <img src="../assets/images/bg_legacy_hogwarts.jpg" alt="Hogwarts Legacy">
                <div class="container d-flex flex-column p-0">
                    <p class="title_ff fs-2 text-white">Hogwarts Legacy : L'Héritage de Poudlard<br />
                        <span class="price yellow fs-1 text_ff">25</span>
                    </p>
                </div>
            </picture>
        </div>
        <div class="main_tendency p-0">
            <div class="container p-0">
                <h1 class="mt-3 text-white title_ff fs-2">Tendances</h1>
            </div>
        </div>
    </main>
<?php require('../assets/lib/externalsJS.php') ?>
</body>
</html>