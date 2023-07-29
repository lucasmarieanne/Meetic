<?php
    session_start();
    include('../models/connect.php');
    include('../models/login.php');
    include('../models/verif.php');
    include('../models/deleteAccount.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="icon" href="../views/images/logo_meetic.png">

    <link rel="stylesheet" href="../views/css/reset.css">
    <link rel="stylesheet" href="../views/css/fonts.css">
    <link rel="stylesheet" href="../views/css/connexion.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="wrapper">

        <div class="home">

            <div class="profilBox">

                <div class="profilContainer">

                    <div class="profilTitle">

                        <div class="est">
                               <h1>Mon Profil</h1>
                            <p>Gérez les paramètres de votre profil</p>
                        </div>

                        <div class="profilButton">

                            <form method="post">

                                <?php
                                    if (isset($_SESSION['id'])) {
                                ?>
                                    <li>
                                        <a href="../models/log_out.php" class="logOut">
                                            <p>Deconnexion</p>
                                            <i class="fa-solid fa-right-from-bracket"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button name="deleteAccount" class="logOut logOut2">
                                            <p>Supprimer mon compte</p>
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </li>
                                <?php
                                    } else {
                                ?>
                                    <li><a href="../views/sign_in.php" class="signIn">Se connecter</a></li>
                                    <li><a href="../views/sign_up.php" class="signUp">S'inscrire</a></li>
                                <?php
                                    }
                                ?>
                            </form>

                        </div>
                        
                    </div>

                    <div class="profilSession">
                        <?php
                            if (isset($_SESSION['id'])) {
                                echo "<div class='welcome'>" . "Bienvenue !" . "</div>" .  "<div class='profilSessionUser'>" . "<h2>" . $_SESSION['prenom'] . "</h2>" . "<h2>". $_SESSION['nom'] . "</h2>" . "</div>";
                            } else {
                                header('Location: /W-PHP-501-PAR-1-1-mymeetic-lucas.marie-anne/views/sign_in.php');
                            }
                        ?>
                    </div>

                    <div class="profilAvatar">
                        <div class="profilPicture"></div>
                        <div class="profilAvatarButton">
                            <button class="avatarButton1">Télécharger une photo</button>
                            <button class="avatarButton2">Supprimer</button>
                        </div>
                    </div>

                    <div class="inputProfil">
                        <div class="inputBox">
                            <label type="text">Nom complet</label>
                            <input type="text" value="<?php if (isset($_SESSION['id'])) { echo $_SESSION['prenom'] . " "; echo $_SESSION['nom']; }  ?>">
                        </div>

                        <div class="inputBox">
                            <label type="text">E-mail</label>
                            <input type="text" value="<?php if (isset($_SESSION['id'])) { echo $_SESSION['mail']; }  ?>">
                        </div>

                        <div class="inputBox">
                            <label type="text">Date de naissance</label>
                            <input type="text" value="<?php if (isset($_SESSION['id'])) { echo $_SESSION['date_naissance']; }  ?>">
                        </div>

                        <div class="inputBox">
                            <label type="text">Genre</label>
                            <input type="text" value="<?php if (isset($_SESSION['id'])) { echo $_SESSION['genre']; }  ?>">
                        </div>

                        <div class="inputBox">
                            <label type="text">Loisir(s)</label>
                            <input type="text" value="<?php if (isset($_SESSION['id'])) { echo $_SESSION['hobbie']; }  ?>">
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    
</body>
</html>