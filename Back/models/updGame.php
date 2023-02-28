<?php


function selectGenre() {
    $db = dbConnect();
    $query = "SELECT * FROM genre";
    $genreStmt = $db->prepare($query);
    $genreStmt-> execute();
    $genres = $genreStmt->fetchAll();
    return $genres;
}

function updGames() {
    $db= dbConnect();
    $id = intval($_GET['id']); 
    $query = "SELECT * FROM game WHERE id = :id ";
    $req = $db->prepare($query);  
    $req -> bindValue(':id', $id, PDO::PARAM_INT);
    $req -> execute();
    $res = $req->fetch();
    $name = $res['name'];
    $description = $res['description'];
    $price = $res['price'];
    
    
    if(isset($_POST['upd'])) {
            $nameUpd= strip_tags($_POST['name']);
            $descriptionUpd= strip_tags($_POST['description']);
            $availableUpd= boolval($_POST['available']);
            $idGenreUpd= strip_tags($_POST['id_genre']);
            $priceUpd= strip_tags($_POST['price']);
            $query = "UPDATE game SET name = :name, available = :available, id_genre = :id_genre, description = :description, price = :price WHERE id = :id ";
            $req = $db->prepare($query);
            $req -> bindValue(':id', $id, PDO::PARAM_INT);
            $req -> bindValue(':name', $nameUpd, PDO::PARAM_STR);
            $req -> bindValue(':available', $availableUpd, PDO::PARAM_INT);
            $req -> bindValue(':description', $descriptionUpd, PDO::PARAM_STR);
            $req -> bindValue(':price', $priceUpd);
            $req -> bindValue(':id_genre', $idGenreUpd, PDO::PARAM_INT);
            $req -> execute();
            header('location: index.php?action=game');
        } 
        return [$name, $description, $price];
    }