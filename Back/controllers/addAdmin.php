<?php
require_once('../models/dbConnect.php');
require_once('../models/addAdmin.php');
require_once('../models/model.php');

function createAdmin($p) {
    $msg= $p;
    require('../templates/addAdmin.php');
}