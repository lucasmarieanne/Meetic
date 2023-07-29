<?php
    include('../models/login.php');
    include('../models/verif.php');
    include('../models/messageError.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="icon" href="../views/images/logo_meetic.png">

    <link rel="stylesheet" href="../views/css/reset.css">
    <link rel="stylesheet" href="../views/css/fonts.css">
    <link rel="stylesheet" href="../views/css/style.css">
    <link rel="stylesheet" href="../views/css/style2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <h1>Créer un nouveau compte<span>.</span></h1>
                            <p>Créé votre compte pour commencer à swiper !</p>
                        </div>

                        <form method="post" class="formulaire">

                            <div class="formBox">

                                <div class="input">
                                    <label for="">Prénom <span>*</span></label>
                                    <div class="inputIcon">
                                        <i class="fa-regular fa-user"></i>
                                        <input type="text" name="firstname" value="<?php if (isset($firstname)) { echo $firstname; } ?>">
                                    </div>
                                    <div class="messageError">
                                        <?php
                                            if (isset($err_firstname)) {
                                                echo $err_firstname;
                                            } else {
                                                echo " <div class='messageCorrect'>$correct_firstname</div>";
                                            }
                                        ?>
                                    </div>
                                </div>
    
                                <div class="input">
                                    <label for="">Nom <span>*</span></label>
                                    <div class="inputIcon">
                                        <i class="fa-regular fa-user"></i>
                                        <input type="text" name="lastname" value="<?php if (isset($lastname)) { echo $lastname; } ?>">
                                    </div>
                                    <div class="messageError">
                                        <?php
                                            if (isset($err_lastname)) {
                                                echo $err_lastname;
                                            } else {
                                                echo " <div class='messageCorrect'>$correct_lastname</div>";
                                            }
                                        ?>
                                    </div>
                                </div>

                                <div class="input">
                                    <label for="">E-mail <span>*</span></label>
                                    <div class="inputIcon">
                                        <i class="fa-solid fa-at"></i>
                                        <input type="text" name="mail" value="<?php if (isset($mail)) { echo $mail; } ?>">
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
                                            } else {
                                                echo " <div class='messageCorrect'>$correct_password</div>";
                                            }
                                        ?>
                                    </div>
                                </div>

                                <button type="submit" name="signup" class="boxButton">
                                    <div class="textButton">Créer un compte</div>
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </button>

                            </div>

                            <div class="formBox">

                                <div class="input">
                                    <label for="">Ville <span>*</span></label>
                                    <div class="inputIcon">
                                        <i class="fa-solid fa-city"></i>
                                        <input type="text" name="city" value="<?php if (isset($city)) { echo $city; } ?>">
                                    </div>
                                    <div class="messageError">
                                        <?php
                                            if (isset($err_city)) {
                                                echo $err_city;
                                            } else {
                                                echo " <div class='messageCorrect'>$correct_city</div>";
                                            }
                                        ?>
                                    </div>
                                </div>
    
                                <div class="input">
                                    <label for="">Date de naissance <span>*</span></label>
                                    <div class="inputIcon">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <input type="text" name="date" value="<?php if (isset($date)) { echo $date; } ?>">
                                    </div>
                                    <div class="messageError">
                                        <?php
                                            if (isset($err_date)) {
                                                echo $err_date;
                                            } else {
                                                echo " <div class='messageCorrect'>$correct_date</div>";
                                            }
                                        ?>
                                    </div>
                                </div>
    
                                <div class="input">
                                    <label for="">Genre <span>*</span></label>
                                    <div class="inputIcon">
                                        <i class="fa-solid fa-venus-mars"></i>
                                        <input type="text" name="genre" value="<?php if (isset($genre)) { echo $genre; } ?>">
                                    </div>
                                    <div class="messageError">
                                        <?php
                                            if (isset($err_genre)) {
                                                echo $err_genre;
                                            } else {
                                                echo " <div class='messageCorrect'>$correct_genre</div>";
                                            }
                                        ?>
                                    </div>
                                </div>
                                
                                <div class="input">
                                    <label for="">Loisir</label>
                                    <div class="inputIcon">
                                        <i class="fa-solid fa-heart"></i>
                                        <input type="text" name="hobbie" value="<?php if (isset($hobbie)) { echo $hobbie; } ?>">
                                    </div>
                                    <div class="messageError">
                                        <?php
                                            if (isset($err_hobbie)) {
                                                echo $err_hobbie;
                                            } else {
                                                echo " <div class='messageCorrect'>$correct_hobbie</div>";
                                            }
                                        ?>
                                    </div>
                                </div>

                            </div>

                        </form>

                        <div class="boxText">
                            <p>Vous avez déjà un compte ?<a href="../views/sign_in.php">Se connecter</a></p>
                        </div>

                    </div>
                </div>

            </div>
            
        </div>

    </div>
    
</body>
</html>