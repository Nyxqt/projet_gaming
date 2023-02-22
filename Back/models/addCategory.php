<?php
$msg='';
if(isset($_POST['submit'])){

    if (!isset($_POST['name']) || empty($_POST['name'])
    || (!isset($_POST['enabled']) || (empty($_POST['enabled']))) ) {
        $msg = 'Veuillez compléter tout les champs.';
    } else {
        $name= strip_tags($_POST['name']);
        $enabled= strval($_POST['enabled']);
        if ($enabled == "true") {
            $enabled = true;
        } else {
            $enabled = false;
        }
        
        $query = dbConnect()->prepare("INSERT INTO category (name, enabled) VALUES (:name, :enabled)");
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':enabled', $enabled, PDO::PARAM_INT);
        $query->execute();
        $msg = "L'inscription a bien été effectuée.";
    }
} 