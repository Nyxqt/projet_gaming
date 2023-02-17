<?php
require_once('../models/dbConnect.php');
require_once('../models/admin.php');
require_once('../models/model.php');

function crudAdmin() {
    $admins= getAdmins();
    require('../templates/admin.php');
}

   

