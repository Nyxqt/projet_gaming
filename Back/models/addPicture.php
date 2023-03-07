<?php

if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
        if ($_FILES['picture']['size'] <= 1000000) {
            $fileInfo= pathinfo($_FILES['picture']['name']);
            $extension= $fileInfo['extension'];
            $allowedExtensions= ['jpg', 'gif', 'png'];
            if (in_array ($extension, $allowedExtensions)) {
                move_uploaded_file($_FILES['picture']['tmp_name'], '../assets/images' . basename($_FILES['picture']['name']));
                $picture= '../assets/images' . basename($_FILES['picture']['name']);
                $name= basename($_FILES['picture']['name']);
                $query = $db->prepare("INSERT INTO picture(name, route) VALUES (:name, :route)");
                $query->bindValue(':name', $name, PDO::PARAM_STR);
                $query->bindValue(':route', $picture, PDO::PARAM_STR);
                $query->execute();
            }
            else {
                echo 'Le format du fichier n\'est pas conforme, veuillez n\'envoyer que des fichiers .jpg .gif .png.';
                exit;
            }
        }
        else {
            echo 'Votre fichier dépasse la limite de taille.';
            exit;
        }
    }