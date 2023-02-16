<?php
$msg='';
if(isset($_POST['submit'])){

    if (!isset($_POST['nickname']) || empty($_POST['nickname'])
    || (!isset($_POST['email']) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)))
    || (!isset($_POST['pw']) || empty($_POST['pw']))
    || (!isset($_POST['pwconfirm']) || empty($_POST['pwconfirm'])) ) {
        $msg = 'Veuillez compléter tout les champs.';
    }  
    if (($_POST['pw']) <> ($_POST['pwconfirm'])) {
        $msg = 'Les mots de passe ne sont pas identiques';
    } else {
        $nickname= strip_tags($_POST['nickname']);
        $email= $_POST['email'];
        $password = password_hash($_POST['pw'], PASSWORD_DEFAULT);
        
        $query = dbConnect()->prepare("INSERT INTO admin (username, email, password) VALUES (:username, :email, :password)");
        $query->bindValue(':username', $username, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $msg = "L'inscription a bien été effectuée.";
    }
} 