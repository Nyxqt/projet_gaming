<?php
require_once('../models/dbConnect.php');
require_once('../models/delGenre.php');
require_once('../models/model.php');

function delGenre($id) {
    deleteGenre($id);
    header('Location: index.php?action=genre&p=1');
}