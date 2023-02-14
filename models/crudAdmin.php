<?php
if  (isset($_POST['submit'])){

    if (!isset($_POST['nickname']) || empty($_POST['nickname'])
    || (!isset($_POST['email']) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
    || (!isset($_POST['pw']) || empty($_POST['pw']))
    || (!isset($_POST['pwconfirm']) || empty($_POST['pwconfirm'])) ) {
    $msg = 'Veuillez compléter tout les champs.';
    exit;
    }  
    if (($_POST['pw']) <> ($_POST['pwconfirm'])) {
    $msg = 'Les mots de passe ne sont pas identiques';
    exit;
    }
    else {
    $nickname= strip_tags($_POST['nickname']);
    $email= $_POST['email'];
    $password = password_hash($_POST['pw'], PASSWORD_DEFAULT);

    $msg = "L'inscription a bien été effectué.";

    $query = $db->prepare("INSERT INTO admin (nickname, mail, password) VALUES (:nickname, :mail, :password)");
    $query->bindValue(':nickname', $nickname, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':mail', $email, PDO::PARAM_STR);
    $query->execute();
    }
}