<?php

// Connexion DB

function dbConnect() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=project;charset=utf8', 'root', '');
        return $db;
    } 
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}