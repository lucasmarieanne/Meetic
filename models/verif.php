<?php

if (!empty($_POST)) {
    extract($_POST);
    $valid = (boolean) true;

    if (isset($_POST['signup'])) {

        $firstname = (string) ucfirst(strtolower(trim($firstname)));
        $lastname = (string) ucfirst(trim ($lastname));
        $mail = (string) strtolower(trim($mail));
        $password = (string) trim ($password);
        $city = (string) ucfirst(strtolower(trim($city)));
        $date = (int) trim($date);
        $genre = (string) ucfirst(strtolower(trim($genre)));
        $hobbie = (string) ucfirst(strtolower(trim($hobbie)));

        if (empty($firstname)) {
            $valid = false;
            $err_firstname = "Veuillez renseigner votre prénom !";
        } else {
            $correct_firstname = "Prénom correct";
        }
        if (empty($lastname)) {
            $valid = false;
            $err_lastname = "Veuillez renseigner votre nom !";
        } else {
            $correct_lastname = "Nom correct";
        }
        if (empty($mail)) {
            $valid = false;
            $err_mail = "Veuillez renseigner une adresse mail !";
        } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $valid = false;
            $err_mail = "Format invalide ! '@' manquant !";
        } else {
            $correct_mail = "E-mail correct";

            $request = $database->prepare("SELECT id FROM utilisators WHERE mail = ?");
            $request->execute(array($mail));
            $user = $request->fetch();

            if (isset($user['id'])) {
                $valid = false;
                $err_mail = "Cette adresse e-mail est déjà utilisée";
            }
        }
        if (empty($password)) {
            $valid = false;
            $err_password = "Veuillez créer votre mot de passe entre 5 et 20 caractères !";
        } elseif (grapheme_strlen($password) < 5) {
            $valid = false;
            $err_password = "Votre mot de passe est trop court. <br> Il doit contenir au minimum 5 caractères (" . grapheme_strlen($password) . "/5)";
        } elseif (grapheme_strlen($password) > 20) {
            $valid = false;
            $err_password = "Votre mot de passe est trop long. <br> Il doit contenir moins de 20 caractères (" . grapheme_strlen($password) . "/20)";
        } else {
            $correct_password = "Mot de passe correct";
        }
        if (empty($city)) {
            $valid = false;
            $err_city = "Veuillez renseigner une ville !";
        } else {
            $correct_city = "Ville choisie";
        }
        if (empty($date)) {
            $valid = false;
            $err_date = "Veuillez renseigner votre date de naissance !";
        } elseif ($date <= 17) {
            $valid = false;
            $err_date = "Vous devez être majeur pour vous inscrire !";
        } else {
            $correct_date = "Date de naissance validé";
        }
        if (empty($genre)) {
            $valid = false;
            $err_genre = "Veuillez renseigner votre genre !";
        } else {
            $correct_genre = "Genre validé";
        }
        if (empty($hobbie)) {
            $valid = false;
            $err_hobbie = "Veuillez renseigner au moins 1 loisir !";
        } else {
            $correct_hobbie = "Vous avez choisi au moins 1 loisir";
        }

        // Request MYSQL

        if ($valid) {

            $date_inscription = date("Y-m-d H:i:s");

            // Première méthode de cryptage de mot de passe
            $password = crypt($password, '$6$rounds=5000$Q95hhdhJG8763hjaukl98hs188sjhs1hqsqht996fdss$');

            // Deuxième méthode de cryptage de mot de passe
            // $crypt_password = password_hash($password, PASSWORD_ARGON2ID, $option);

            // echo $crypt_password;

            // if (password_verify($password, $crypt_password)) {
            //     $err_password = "Mot de passe validé";
            // } else {
            //     $err_password = "Mot de passe invalide";
            // }

            // Requête qui envoie les données dans la base de donnée
            // $request = $database->prepare("INSERT INTO utilisators(prenom, nom, mail, password, city, date_naissance, genre, hobbie, date_inscription, date_connexion) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            // $request->execute(array($firstname, $lastname, $mail, $password, $city, $date, $genre, $hobbie, $date_inscription, $date_inscription));
            $request = $database->prepare("INSERT INTO utilisators(prenom, nom, mail, password, city, date_naissance, genre, hobbie, date_inscription, date_connexion) VALUES('$firstname', '$lastname', '$mail', '$password', '$city', '$date', '$genre', '$hobbie', '$date_inscription', '$date_inscription')");
            $request->execute();
            
            // Localisation une fois la requête envoyé
            header('Location: /W-PHP-501-PAR-1-1-mymeetic-lucas.marie-anne/views/from_valid.html');
            exit;
        }
    }
}

?>