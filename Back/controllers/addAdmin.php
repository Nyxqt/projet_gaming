<?php
require_once('../models/dbConnect.php');
require_once('../models/addAdmin.php');
function createAdmin($p) {
    $msg= $p;
    require('../templates/addAdmin.php');
}