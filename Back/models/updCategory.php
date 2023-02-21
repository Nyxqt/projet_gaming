<?php

    function updCategories() {
        $db= dbConnect();
        $id = intval($_GET['id']); 
        $query = "SELECT * FROM category WHERE id = :id ";
        $req = $db->prepare($query);  
        $req -> bindValue(':id', $id, PDO::PARAM_INT);
        $req -> execute();
        $res = $req->fetch();
        $name = $res['name'];
        
        if(isset($_POST['upd'])) {
            $usernameUpd = htmlspecialchars($_POST['name']);
            $enabledUpd= boolval($_POST['enabled']);
            $query = "UPDATE category SET name = :name, enabled = :enabled WHERE id = :id ";
            $req = $db->prepare($query);   
            $req -> bindValue(':id', $id, PDO::PARAM_INT);
            $req -> bindValue(':name', $usernameUpd, PDO::PARAM_STR);
            $req -> bindValue(':enabled', $enabledUpd, PDO::PARAM_INT);
            $req -> execute();
            header('location: index.php?action=category');
        }
        return $name;
    }
    