<?php
session_start();
if (isset($_SESSION['username'])) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            require('../controllers/homepage.php');
            homepageAdmin();
            
        } elseif($_GET['action'] == 'addAdmin') {
            require('../controllers/addAdmin.php');
            createAdmin($msg);
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
