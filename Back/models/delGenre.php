<?php

function deleteGenre($id) {

    $reqDelete= 'DELETE FROM `genre` WHERE id = :id';
    $genreDelete= dbConnect()->prepare($reqDelete);
    $genreDelete-> bindValue(':id', $id, PDO::PARAM_INT);
    $genreDelete-> execute();
}