<?php
require_once('../models/dbConnect.php');
require_once('../models/admin.php');
require_once('../models/model.php');

function getAdminList() {
    $admins= getAdmins();
    $ad= $admins[0];
    $previous= $admins[1];
    $next= $admins[2];
    $page= $admins[3];
    $end= $admins[4];
    $num_pages= $admins[5];
    $start= $admins[6];
    require('../templates/admin.php');
}

   

