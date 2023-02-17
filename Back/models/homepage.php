<?php

function totalUsers() {
    $totalUsers= 'SELECT COUNT(*) AS TOTAL FROM users';
    $totalQuery = dbConnect()->query($totalUsers);
    $totalUsers = $totalQuery->fetch();
    $total = $totalUsers['TOTAL'];
    return $total;
}
function totalProducts() {
    $totalProducts= 'SELECT COUNT(*) AS TOTAL FROM game';
    $totalQuery = dbConnect()->query($totalProducts);
    $totalProducts = $totalQuery->fetch();
    $total = $totalProducts['TOTAL'];
    return $total;
}
function totalOrders() {
    $totalOrders= 'SELECT COUNT(*) AS TOTAL FROM orders';
    $totalQuery = dbConnect()->query($totalOrders);
    $totalOrders = $totalQuery->fetch();
    $total = $totalOrders['TOTAL'];
    return $total;
}