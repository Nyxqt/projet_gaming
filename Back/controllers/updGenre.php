<?php
require_once('../models/dbConnect.php');
require_once('../models/updGenre.php');
require_once('../models/model.php');

function updGenre() {
    $genres= selectCategory();
    $updGenre= updGenres();
    $name= $updGenre;
    require('../templates/updGenre.php');
}
