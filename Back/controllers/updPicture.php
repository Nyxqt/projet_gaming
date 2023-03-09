<?php
require_once('../models/dbConnect.php');
require_once('../models/updPicture.php');
require_once('../models/model.php');

function updPicture() {
    $updPicture= updPictures();
    $name= $updPicture[0];
    $picture= $updPicture[1];
    require('../templates/updPicture.php');
}
