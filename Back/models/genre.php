<?php

function deleteGenre() {
    if(isset($_GET['id'])) {
        $genreId= $_GET['id'];
        $reqDelete= 'DELETE FROM `genre` WHERE id = :id';
        $genreDelete= dbConnect()->prepare($reqDelete);
        $genreDelete-> bindValue(':id', $genreId, PDO::PARAM_INT);
        $genreDelete-> execute();
    }
}



function getGenres() {
    // PAGINATION SYSTEM
    $db = dbConnect();
    $per_page = 10;
    $page = 1;
    if (isset($_GET['p']) && !empty($_GET['p'])) {
        $page = intval($_GET['p']);
    }
    else {
        $page = 1;
    }

    $start_page = 1;
    $nb_pagination = 3;
    $offset = ($page - 1) * $per_page;

    $total_query = "SELECT COUNT(*) as total FROM genre";
    $total_result = $db->query($total_query);
    $total_row = $total_result->fetch();
    $total = $total_row['total'];

    $num_pages = ceil($total / $per_page);
    $start = max(1, $page - 2);
    $end = min($num_pages, $page + 2);

    $next = $page + 1;
    $previous = $page - 1;

    // SQL REQUEST ADMIN LIST

    $statement = $db->query("SELECT * FROM genre ORDER BY id LIMIT $offset, $per_page");
    $genres = [];
    while (($row = $statement->fetch())) {
        $genre = [
            'id' => $row['id'],
            'name' => $row['name'],
            'enabled' => $row['enabled'],
            'id_category' => $row['id_category']
            ];
        $genres[] = $genre;
    }
    
    return [$genres, $next, $previous, $page, $end, $num_pages, $start];
}

function selectCategory($catId) {
    $db = dbConnect();
    $total_query = "SELECT name FROM category WHERE id = ".$catId["id_category"];
    $genreStmt = $db->prepare($total_query);
    $genreStmt-> execute();
    $nameCat = $genreStmt->fetch();
    return $nameCat["name"];
}