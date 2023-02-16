<?php
require_once('../models/dbConnect.php');
// require_once('../models/homepage.php');

function homepageAdmin() {
    require('../templates/homepage.php');
}
function getUser() {
    $user = ($_SESSION['username']);
    return $user;
}