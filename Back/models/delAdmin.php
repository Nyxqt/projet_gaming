<?php

function deleteAdmin($id) {

    $reqDelete= 'DELETE FROM `admin` WHERE id = :id';
    $genreDelete= dbConnect()->prepare($reqDelete);
    $genreDelete-> bindValue(':id', $id, PDO::PARAM_INT);
    $genreDelete-> execute();
}