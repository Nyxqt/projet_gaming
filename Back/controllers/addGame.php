<?php
require_once('../models/dbConnect.php');
require_once('../models/addGame.php');
require_once('../models/model.php');

function createGame($p) {
    $msg= $p;
    $genres= getGenres();
    require('../templates/addGame.php');
}