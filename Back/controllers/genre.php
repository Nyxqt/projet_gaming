<?php
require_once('../models/dbConnect.php');
require_once('../models/genre.php');
require_once('../models/model.php');

function getGenreList() {
    $getGenres= getGenres();
    $genres= $getGenres[0];
    $previous= $getGenres[1];
    $next= $getGenres[2];
    $page= $getGenres[3];
    $end= $getGenres[4];
    $num_pages= $getGenres[5];
    $start= $getGenres[6];
    require('../templates/genre.php');
}
