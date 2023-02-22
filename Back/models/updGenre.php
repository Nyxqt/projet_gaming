<?php


function selectCategory() {
    $db = dbConnect();
    $total_query = "SELECT * FROM category";
    $genreStmt = $db->prepare($total_query);
    $genreStmt-> execute();
    $genres = $genreStmt->fetchAll();
    return $genres;
}

function updGenres() {
    $db= dbConnect();
    $id = intval($_GET['id']); 
    $query = "SELECT * FROM genre WHERE id = :id ";
    $req = $db->prepare($query);  
    $req -> bindValue(':id', $id, PDO::PARAM_INT);
    $req -> execute();
    $res = $req->fetch();
    $name = $res['name'];
    
    if(isset($_POST['upd'])) {
            $nameUpd= strip_tags($_POST['name']);
            $enabledUpd= boolval($_POST['enabled']);
            $idCatUpd= strip_tags($_POST['id_category']);
            $query = "UPDATE genre SET name = :name, enabled = :enabled, id_category = :id_category WHERE id = :id ";
            $req = $db->prepare($query);
            $req -> bindValue(':id', $id, PDO::PARAM_INT);
            $req -> bindValue(':name', $nameUpd, PDO::PARAM_STR);
            $req -> bindValue(':enabled', $enabledUpd, PDO::PARAM_INT);
            $req -> bindValue(':id_category', $idCatUpd, PDO::PARAM_INT);
            $req -> execute();
            header('location: index.php?action=genre');
        } 
        return $name;
    }
   
