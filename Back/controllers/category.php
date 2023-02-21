<?php
require_once('../models/dbConnect.php');
require_once('../models/category.php');
require_once('../models/model.php');

function crudCategory() {
    deleteCategory();
    $categories= getCategories();
    $cat= $categories[0];
    $previous= $categories[1];
    $next= $categories[2];
    $page= $categories[3];
    $end= $categories[4];
    $num_pages= $categories[5];
    $start= $categories[6];
    require('../templates/category.php');
}
