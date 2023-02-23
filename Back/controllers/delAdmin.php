<?php
require_once('../models/dbConnect.php');
require_once('../models/delAdmin.php');
require_once('../models/model.php');

function delAdmin($id) {
    deleteAdmin($id);
    header('Location: index.php?action=admin&p=1');
}