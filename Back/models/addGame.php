<?php
$msg='';

function getGenres() {
    $db = dbConnect();
    $query = "SELECT * FROM genre";
    $genreStmt = $db->prepare($query);
    $genreStmt-> execute();
    $genres = $genreStmt->fetchAll();
    return $genres;
}

if(isset($_POST['submit'])){

    if (!isset($_POST['name']) || empty($_POST['name'])
    || (!isset($_POST['description']) || (empty($_POST['description'])))
    || (!isset($_POST['available']) || (empty($_POST['available'])))
    || (!isset($_POST['price']) || (empty($_POST['price'])))
    || (!isset($_POST['id_genre']) || (empty($_POST['id_genre']))) ) {
        $msg = 'Veuillez compléter tout les champs.';
    } else {
        $name= strip_tags($_POST['name']);
        $available= strval($_POST['available']);
        $idGenre= strip_tags($_POST['id_genre']);
        $description= strip_tags($_POST['description']);
        $price= intval($_POST['price']);
        $idt_product= time();
        if ($available == "true") {
            $available = true;
        } else {
            $available = false;
        }
        
        $query = dbConnect()->prepare("INSERT INTO game (name, available, id_genre, description, price, idt_product) 
        VALUES (:name, :available, :id_genre, :description, :price, :idt_product)");
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':available', $available, PDO::PARAM_BOOL);
        $query->bindValue(':id_genre', $idGenre, PDO::PARAM_INT);
        $query->bindValue(':description', $description, PDO::PARAM_STR);
        $query->bindValue(':price', $price);
        $query->bindValue(':idt_product', $idt_product, PDO::PARAM_INT);
        $query->execute();
        $msg = "L'inscription a bien été effectuée.";
    }
} 