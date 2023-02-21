<?php

function deleteCategory() {
    if(isset($_GET['id'])) {
        $adminId= $_GET['id'];
        $reqDelete= 'DELETE FROM `category` WHERE id = :id';
        $adminDelete= dbConnect()->prepare($reqDelete);
        $adminDelete-> bindValue(':id', $adminId, PDO::PARAM_INT);
        $adminDelete-> execute();
    }
}

function getCategories() {
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

    $total_query = "SELECT COUNT(*) as total FROM category";
    $total_result = $db->query($total_query);
    $total_row = $total_result->fetch();
    $total = $total_row['total'];

    $num_pages = ceil($total / $per_page);
    $start = max(1, $page - 2);
    $end = min($num_pages, $page + 2);

    $next = $page + 1;
    $previous = $page - 1;

    // SQL REQUEST ADMIN LIST

    $statement = $db->query("SELECT * FROM category ORDER BY id LIMIT $offset, $per_page");
    $categories = [];
    while (($row = $statement->fetch())) {
        $category = [
            'id' => $row['id'],
            'name' => $row['name'],
            'enabled' => $row['enabled'],
            ];
        $categories[] = $category;
    }
    return [$categories, $next, $previous, $page, $end, $num_pages, $start];
}