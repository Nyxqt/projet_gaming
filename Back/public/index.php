<?php
session_start();
if (isset($_SESSION['username'])) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            require('../controllers/homepage.php');
            homepageAdmin();
          
        } elseif($_GET['action'] == 'admin') {
            require('../controllers/admin.php');
            crudAdmin();

        } elseif($_GET['action'] == 'addAdmin') {
            require('../controllers/addAdmin.php');
            createAdmin($msg);

        } elseif($_GET['action'] == 'updAdmin') {
            if(isset($_GET['id'])) {
                require('../controllers/updAdmin.php');
                updAdmin();
            }

        } elseif($_GET['action'] == 'category') {
            require('../controllers/category.php');
            crudCategory();

        } elseif($_GET['action'] == 'addCategory') {
            require('../controllers/addCategory.php');
            createCategory($msg);

        } elseif($_GET['action'] == 'updCategory') {
            if(isset($_GET['id'])) {
                require('../controllers/updCategory.php');
                updCategory();
            }

        } elseif($_GET['action'] == 'logout') {
            require('../models/logoutAdmin.php');

        } elseif($_GET['action'] == 'genre') {
            require('../controllers/genre.php');
            crudGenre();

        } elseif($_GET['action'] == 'addGenre') {
            require('../controllers/addGenre.php');
            createGenre($msg);

        } elseif($_GET['action'] == 'updGenre') {
            if(isset($_GET['id'])) {
                require('../controllers/updGenre.php');
                updGenre();
            }

        } else {
            require('../controllers/homepage.php');
            homepageAdmin();

        }

    } else {
        require('../controllers/homepage.php');
        homepageAdmin();
    }

} else {
        require('../controllers/loginAdmin.php');
        loginAdmin($msg);
}
