<?php
    include('../models/login.php');
    include('../models/connect.php');
    include('../models/messageError.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="icon" href="../views/images/logo_meetic.png">

    <link rel="stylesheet" href="../views/css/reset.css">
    <link rel="stylesheet" href="../views/css/fonts.css">
    <link rel="stylesheet" href="../views/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
</head>
<body>

    <div class="wrapper">

        <div class="home">

            <div class="homeBox">

                <div class="homeBoxLeft"></div>

                <div class="homeBoxRight">

                    <div class="backHome">
                        
                        <a href="../views/app.php" class="logo">
                            <img src="../views/images/logo_meetic.png" alt="">
                        </a>
                        
                    </div>

                    <div class="BoxRight">

                        <div class="boxTitle">
                            <h1>Connexion<span>.</span></h1>
                            <p>Connecter vous pour commencer à swiper !</p>
                        </div>

                        <form method="post" class="formulaire">

                            <div class="formBox">

                                <div class="input">
                                    <label for="">E-mail <span>*</span></label>
                                    <div class="inputIcon">
                                        <i class="fa-solid fa-at"></i>
                                        <input type="email" name="mail" value="<?php if (isset($mail)) { echo $mail; } ?>">
                                    </div>
                                    <div class="messageError">
                                        <?php
                                            if (isset($err_mail)) {
                                                echo $err_mail;
                                            } else {
                                                echo " <div class='messageCorrect'>$correct_mail</div>";
                                            }
                                        ?>
                                    </div>
                                </div>
                                
                                <div class="input">
                                    <label for="">Mot de passe <span>*</span></label>
                                    <div class="inputIcon">
                                        <i class="fa-solid fa-key"></i>
                                        <input type="password" name="password">
                                    </div>
                                    <div class="messageError">
                                        <?php
                                            if (isset($err_password)) {
                                                echo $err_password;
                                            }
                                        ?>
                                    </div>
                                </div>

                                <button type="submit" name="signin" class="boxButton">
                                    <div class="textButton">Se connecter</div>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </button>

                            </div>

                        </form>

                        <div class="boxText">
                            <p>Vous n'avez pas encore de compte ?<a href="../views/sign_up.php">S'inscrire</a></p>
                        </div>

                    </div>
                </div>

            </div>
            
        </div>

    </div>
    
</body>
</html>