# Meetic

## Description du projet

Le projet "Meetic" a pour objectif de créer un site de rencontres à la manière de Meetic. Le site permettra aux utilisateurs de s'inscrire, de se connecter et d'interagir avec d'autres membres en utilisant une base de données pour stocker les informations des utilisateurs. Le site mettra l'accent sur la gestion des erreurs pour les formulaires d'inscription et de connexion, garantissant ainsi une expérience utilisateur fluide et sécurisée.

## Instructions pour lancer le projet

Suivez ces étapes pour lancer le projet "Meetic" :

1. Assurez-vous d'avoir PHP installé sur votre système.

2. Clônez le dépôt du projet depuis GitHub en utilisant la commande suivante :
   ```
   git clone https://github.com/votre-utilisateur/meetic.git
   ```
   Remplacez `votre-utilisateur` par votre nom d'utilisateur GitHub ou l'URL du dépôt approprié.

3. Redirigez-vous dans le dossier du projet "Meetic" :
   ```
   cd meetic
   ```

4. Assurez-vous d'avoir une base de données MySQL configurée et prête à être utilisée.

5. Importez le fichier SQL fourni (`database.sql`) dans votre base de données MySQL pour créer les tables nécessaires.

6. Configurer les informations de connexion à la base de données en modifiant le fichier `config.php` avec vos propres identifiants :
   ```php
   <?php
   // config.php
   
   $db_host = 'localhost';
   $db_name = 'nom_de_la_base_de_donnees';
   $db_user = 'votre_nom_d_utilisateur';
   $db_password = 'votre_mot_de_passe';
   ?>
   ```

7. Démarrez un serveur local en utilisant PHP pour exécuter l'application :
   ```
   php -S localhost:8000
   ```

8. Ouvrez votre navigateur et accédez à l'adresse http://localhost:8000/views/app.php pour accéder à la page d'accueil du projet "Meetic".

N'hésitez pas à contacter les auteurs du projet en cas de questions ou de problèmes supplémentaires. Amusez-vous bien avec "Meetic" et bonne chance dans vos rencontres !

## Contact
Pour toute question, suggestion ou retour d'expérience concernant le projet "Meetic", n'hésitez pas à me contacter :

Auteur: Lucas Marie-Anne

Site Web: http://lucasmarieanne.com/

Je serai ravi d'échanger avec vous et de recevoir vos commentaires sur ce projet. Merci de votre intérêt et de votre contribution !
