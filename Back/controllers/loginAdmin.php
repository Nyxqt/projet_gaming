<?php
require_once('../models/dbConnect.php');
require_once('../models/loginAdmin.php');
function loginAdmin($p) {
    $msg= $p;
    require('../templates/loginAdmin.php');
}