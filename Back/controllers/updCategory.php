<?php
require_once('../models/dbConnect.php');
require_once('../models/updCategory.php');
require_once('../models/model.php');

function updCategory() {
    $updCategory= updCategories();
    $name= $updCategory;
    require('../templates/updCategory.php');
}
