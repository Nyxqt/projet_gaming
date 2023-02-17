<?php

function getAdmins() {
    $database = dbConnect();
    $statement = $database->query('SELECT * FROM admin ORDER BY id');
    $admins = [];
    while (($row = $statement->fetch())) {
        $admin = [
            'id' => $row['id'],
            'username' => $row['username'],
            'email' => $row['email'],
            ];
        $admins[] = $admin;
    }
    return $admins;
}
