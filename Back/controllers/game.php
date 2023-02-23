<?php
require_once('../models/dbConnect.php');
require_once('../models/game.php');
require_once('../models/model.php');

function crudGame() {
    $getGames= getGames();
    $games= $getGames[0];
    $previous= $getGames[1];
    $next= $getGames[2];
    $page= $getGames[3];
    $end= $getGames[4];
    $num_pages= $getGames[5];
    $start= $getGames[6];
    require('../templates/game.php');
}
