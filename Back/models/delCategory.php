<?php

function deleteCategory($id) {

$reqDelete= 'DELETE FROM `category` WHERE id = :id';
$genreDelete= dbConnect()->prepare($reqDelete);
$genreDelete-> bindValue(':id', $id, PDO::PARAM_INT);
$genreDelete-> execute();
}