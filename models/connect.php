<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!empty($_POST)) {
    extract($_POST);
    $valid = (boolean) true;

    if (isset($_POST['signin'])) {
        $mail = (string) strtolower(trim($mail));
        $password = (string) trim ($password);

        if (empty($mail)) {
            $valid = false;
            $err_mail = "Veuillez renseigner une adresse mail !";
        } else {
            $correct_mail = "E-mail correct";

            $request = $database->prepare("SELECT id FROM utilisators WHERE mail = ?");
            $request->execute(array($mail));
            $user = $request->fetch();

            if (!isset($user['id'])) {
                $valid = false;
                $err_mail = "Vous n'êtes pas inscrit(e) avec cette adresse e-mail !";
            }
        }
        if (empty($password)) {
            $valid = false;
            $err_password = "Veuillez renseigner un mot de passe !";
        } else {
            $request = $database->prepare("SELECT id FROM utilisators WHERE mail = ? AND password = ?");
            $request->execute(array($mail, crypt($password, '$6$rounds=5000$Q95hhdhJG8763hjaukl98hs188sjhs1hqsqht996fdss$')));
            $verif_user = $request->fetch();

            if(!isset($verif_user['id'])) {
                $valid = false;
                $err_password = "Mot de passe incorrect !";
            }
        }

        if ($valid) {

            $request = $database->prepare("INSERT INTO utilisators (date_connexion) VALUES (?)");
            $request->execute(array(date("Y-m-d H:i:s")));

            $request = $database->prepare("SELECT * FROM utilisators WHERE id = ?");
            $request->execute(array($verif_user['id']));
            $verif_user = $request->fetch();

            $_SESSION['id'] = $verif_user['id'];
            $_SESSION['prenom'] = $verif_user['prenom'];
            $_SESSION['nom'] = $verif_user['nom'];
            $_SESSION['mail'] = $verif_user['mail'];
            $_SESSION['password'] = $verif_user['password'];
            $_SESSION['city'] = $verif_user['city'];
            $_SESSION['date_naissance'] = $verif_user['date_naissance'];
            $_SESSION['genre'] = $verif_user['genre'];
            $_SESSION['hobbie'] = $verif_user['hobbie'];

            // Localisation une fois la requête envoyé
            header('Location: /W-PHP-501-PAR-1-1-mymeetic-lucas.marie-anne/views/connexion.php');
            exit;
        }
    }
}
?>