<?php
require_once('../models/dbConnect.php');
require_once('../models/addGenre.php');
require_once('../models/model.php');

function createGenre($p) {
    $msg= $p;
    $genres= selectCategory();
    require('../templates/addGenre.php');
}