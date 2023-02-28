<?php

function deleteGame($id) {

    $reqDelete= 'DELETE FROM `game` WHERE id = :id';
    $gameDelete= dbConnect()->prepare($reqDelete);
    $gameDelete-> bindValue(':id', $id, PDO::PARAM_INT);
    $gameDelete-> execute();
}