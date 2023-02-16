<?php

$msg = '';
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $query = dbConnect()->prepare("SELECT * FROM admin WHERE email = :email");
    $query-> bindValue(":email", $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();
    if ($email == $user['email'] && password_verify($password, $user['password'])) {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $user['username'];
        require('../controllers/homepage.php');
        homepageAdmin();
    } else {
        $msg= "Identifiant invalide!";
    }
}