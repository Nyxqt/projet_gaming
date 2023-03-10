<?php
session_start();
if (isset($_SESSION['username'])) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            require('../controllers/homepage.php');
            homepageAdmin();

        // ADMIN - ADMIN - ADMIN //
          
        } elseif($_GET['action'] == 'admin') {
            require('../controllers/admin.php');
            getAdminList();

        } elseif($_GET['action'] == 'addAdmin') {
            require('../controllers/addAdmin.php');
            createAdmin($msg);

        } elseif($_GET['action'] == 'updAdmin') {
            if(isset($_GET['id'])) {
                require('../controllers/updAdmin.php');
                updAdmin();
            }

        }  elseif($_GET['action'] == 'delAdmin') {
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                require('../controllers/delAdmin.php');
                delAdmin($id);
            } 

        // CATEGORY - CATEGORY - CATEGORY //

        } elseif($_GET['action'] == 'category') {
            require('../controllers/category.php');
            getCategoryList();

        } elseif($_GET['action'] == 'addCategory') {
            require('../controllers/addCategory.php');
            createCategory($msg);

        } elseif($_GET['action'] == 'updCategory') {
            if(isset($_GET['id'])) {
                require('../controllers/updCategory.php');
                updCategory();
            }

        } elseif($_GET['action'] == 'delCategory') {
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                require('../controllers/delCategory.php');
                delCategory($id);
            } 

        // GENRE - GENRE - GENRE //

        } elseif($_GET['action'] == 'genre') {
            require('../controllers/genre.php');
            getGenreList();

        } elseif($_GET['action'] == 'addGenre') {
            require('../controllers/addGenre.php');
            createGenre($msg);

        } elseif($_GET['action'] == 'updGenre') {
            if(isset($_GET['id'])) {
                require('../controllers/updGenre.php');
                updGenre();
            }

        } elseif($_GET['action'] == 'delGenre') {
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                require('../controllers/delGenre.php');
                delGenre($id);
            } 

        // GAME PRODUCT - GAME PRODUCT - GAME PRODUCT //
            
        } elseif($_GET['action'] == 'game') {
            require('../controllers/game.php');
            getGameList();

        } elseif($_GET['action'] == 'addGame') {
            require('../controllers/addGame.php');
            createGame($msg);

        } elseif($_GET['action'] == 'updGame') {
            if(isset($_GET['id'])) {
                require('../controllers/updGame.php');
                updGame();
            }

        } elseif($_GET['action'] == 'delGame') {
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                require('../controllers/delGame.php');
                delGame($id);
            }

        // PICTURE - PICTURE - PICTURE //
            
        }    elseif($_GET['action'] == 'picture') {
            require('../controllers/picture.php');
            getPictureList();

        } elseif($_GET['action'] == 'addPicture') {
            require('../controllers/addPicture.php');
            addPicture($msg);

        } elseif($_GET['action'] == 'updPicture') {
            if(isset($_GET['id'])) {
                require('../controllers/updPicture.php');
                updPicture();
            }

        } elseif($_GET['action'] == 'delPicture') {
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                require('../controllers/delPicture.php');
                delPicture($id);
            } 
            
        }
          elseif($_GET['action'] == 'logout') {
            require('../models/logoutAdmin.php');

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
