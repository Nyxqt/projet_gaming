<?php

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

    $statement = $db->query("SELECT g.id as gId, g.name as gName, g.enabled as gEnabled, c.name as cName  FROM genre g INNER JOIN category c ON c.id = g.id_category ORDER BY g.id LIMIT $offset, $per_page");
    $genres = [];
    while (($row = $statement->fetch())) {
        $genre = [
            'g.id' => $row['gId'],
            'g.name' => $row['gName'],
            'g.enabled' => $row['gEnabled'],
            'c.name' => $row['cName'],
            ];
        $genres[] = $genre;
    }
    
    return [$genres, $next, $previous, $page, $end, $num_pages, $start];
}

