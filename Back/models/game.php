<?php

function getGames() {
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

    $total_query = "SELECT COUNT(*) as total FROM game";
    $total_result = $db->query($total_query);
    $total_row = $total_result->fetch();
    $total = $total_row['total'];

    $num_pages = ceil($total / $per_page);
    $start = max(1, $page - 2);
    $end = min($num_pages, $page + 2);

    $next = $page + 1;
    $previous = $page - 1;

    // SQL REQUEST GAME LIST

    $statement = $db->query("SELECT g.id as gId, g.name as gName, g.description as gDescription, g.available as gAvailable, gr.name as grName, g.price as gPrice, gr.name as genre FROM game g INNER JOIN genre gr ON gr.id = g.id_genre ORDER BY g.id LIMIT $offset, $per_page");
    $games = [];
    while (($row = $statement->fetch())) {
        $game = [
            'g.id' => $row['gId'],
            'g.name' => $row['gName'],
            'g.description' => $row['gDescription'],
            'g.available' => $row['gAvailable'],
            'gr.name' => $row['grName'],
            'g.price' => $row['gPrice'],
            'genre' => $row['genre'],
            ];
        $games[] = $game;
    }
    
    return [$games, $next, $previous, $page, $end, $num_pages, $start];
}