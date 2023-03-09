<?php
require_once('../models/dbConnect.php');
require_once('../models/picture.php');
require_once('../models/model.php');

function getPictureList() {
    $getPictures= getPictures();
    $pictures= $getPictures[0];
    $previous= $getPictures[1];
    $next= $getPictures[2];
    $page= $getPictures[3];
    $end= $getPictures[4];
    $num_pages= $getPictures[5];
    $start= $getPictures[6];
    require('../templates/picture.php');
}
