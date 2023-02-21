<?php
require_once('../models/dbConnect.php');
require_once('../models/addCategory.php');
require_once('../models/model.php');

function createCategory($p) {
    $msg= $p;
    require('../templates/addCategory.php');
}