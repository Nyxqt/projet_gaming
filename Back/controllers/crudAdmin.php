<?php
require_once('../models/dbConnect.php');
require_once('../models/crudAdmin.php');
function createAdmin() {
    global $msg;
    require('../templates/crudAdmin.php');
}