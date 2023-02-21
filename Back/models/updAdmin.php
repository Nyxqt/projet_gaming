<?php

    function updAdmins() {
        $db= dbConnect();
        $id = intval($_GET['id']); 
        $query = "SELECT * FROM admin WHERE id = :id ";
        $req = $db->prepare($query);  
        $req -> bindValue(':id', $id, PDO::PARAM_INT);
        $req -> execute();
        $res = $req->fetch();
        $username = $res['username'];
        $email = $res['email'];   
        
        if(isset($_POST['upd'])) {
            $usernameUpd = htmlspecialchars($_POST['username']);
            $emailUpd = htmlspecialchars($_POST['email']);
            $query = "UPDATE admin SET username = :username, email = :email WHERE id = :id ";
            $req = $db->prepare($query);   
            $req -> bindValue(':id', $id, PDO::PARAM_INT);
            $req -> bindValue(':username', $usernameUpd, PDO::PARAM_STR);
            $req -> bindValue(':email', $emailUpd, PDO::PARAM_STR);
            $req -> execute();
            header('location: index.php?action=admin');
        }
        return [$username,$email];
    }
    
    
