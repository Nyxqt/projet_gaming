<?php
require_once('../models/dbConnect.php');
require_once('../models/addGenre.php');
require_once('../models/model.php');

function createGenre($p) {
    $msg= $p;
    $categories= getCategories();
    require('../templates/addGenre.php');
}