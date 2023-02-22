<?php
$msg='';

function selectCategory() {
    $db = dbConnect();
    $total_query = "SELECT * FROM category";
    $genreStmt = $db->prepare($total_query);
    $genreStmt-> execute();
    $genres = $genreStmt->fetchAll();
    return $genres;
}

if(isset($_POST['submit'])){

    if (!isset($_POST['name']) || empty($_POST['name'])
    || (!isset($_POST['enabled']) || (empty($_POST['enabled'])))
    || (!isset($_POST['id_category']) || (empty($_POST['id_category']))) ) {
        $msg = 'Veuillez compléter tout les champs.';
    } else {
        $name= strip_tags($_POST['name']);
        $enabled= strval($_POST['enabled']);
        $idCat= strip_tags($_POST['id_category']);
        if ($enabled == "true") {
            $enabled = true;
        } else {
            $enabled = false;
        }
        
        $query = dbConnect()->prepare("INSERT INTO genre (name, enabled, id_category) VALUES (:name, :enabled, :id_category)");
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':enabled', $enabled, PDO::PARAM_BOOL);
        $query->bindValue(':id_category', $idCat, PDO::PARAM_INT);
        $query->execute();
        $msg = "L'inscription a bien été effectuée.";
    }
} 