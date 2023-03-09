<?php
require_once('../models/dbConnect.php');
require_once('../models/addPicture.php');
require_once('../models/model.php');

function addPicture($p) {
    $msg= $p;
    require('../templates/addPicture.php');
}