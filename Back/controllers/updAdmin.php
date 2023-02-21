<?php
require_once('../models/dbConnect.php');
require_once('../models/updAdmin.php');
require_once('../models/model.php');

function updAdmin() {
    $updAdmin= updAdmins();
    $username= $updAdmin[0];
    $email= $updAdmin[1];
    require('../templates/updAdmin.php');
}
