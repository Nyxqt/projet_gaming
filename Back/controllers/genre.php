<?php
require_once('../models/dbConnect.php');
require_once('../models/genre.php');
require_once('../models/model.php');

function crudGenre() {
    deleteGenre();
    $genres= getGenres();
    $gr= $genres[0];
    $previous= $genres[1];
    $next= $genres[2];
    $page= $genres[3];
    $end= $genres[4];
    $num_pages= $genres[5];
    $start= $genres[6];
    $nameCat= selectCategory($gr[0]);
    require('../templates/genre.php');
}