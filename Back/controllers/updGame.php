<?php
require_once('../models/dbConnect.php');
require_once('../models/updGame.php');
require_once('../models/model.php');

function updGame() {
    $genres= selectGenre();
    $updGame= updGames();
    $name = $updGame[0];
    $description = $updGame[1];
    $price = $updGame[2];
    require('../templates/updGame.php');
}