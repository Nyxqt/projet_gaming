<?php

    function updPictures() {
        $db= dbConnect();
        $id = intval($_GET['id']); 
        $query = "SELECT * FROM picture WHERE id = :id ";
        $req = $db->prepare($query);  
        $req -> bindValue(':id', $id, PDO::PARAM_INT);
        $req -> execute();
        $res = $req->fetch();
        $name = $res['name'];
        $picture= $res['path'];
        
        if(isset($_POST['upd'])) {
            $usernameUpd = htmlspecialchars($_POST['name']);
            $emailUpd = htmlspecialchars($_POST['email']);
            $query = "UPDATE picture SET name = :name WHERE id = :id ";
            $req = $db->prepare($query);   
            $req -> bindValue(':id', $id, PDO::PARAM_INT);
            $req -> bindValue(':name', $usernameUpd, PDO::PARAM_STR);
            $req -> execute();
            header('location: index.php?action=picture');
        }
        return [$name,$picture];
    }