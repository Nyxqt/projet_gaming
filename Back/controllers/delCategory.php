<?php
require_once('../models/dbConnect.php');
require_once('../models/delCategory.php');
require_once('../models/model.php');

function delCategory($id) {
    deleteCategory($id);
    header('Location: index.php?action=category&p=1');
}