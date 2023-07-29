<?php
    // $port = "127.0.0.1";
    // $user = "lucas";
    // $password = "lucasma972";

    // try {
    //     $database = new PDO("mysql:host=$port;dbname=cinema", $user, $password);
    //     echo "La connexion à bien été effectué !";

    // } catch (PDOException $e) {
    //     echo "Erreur de connexion à la base de donnée ! : " . $e->getMessage();
    //     die();
    // }

    class connexionDB {
        private $host ='localhost';  // nom de l'host  
        private $database ='meetic';    // nom de la base de donnée
        private $user ='root';       // utilisateur 
        private $pass ='root';       // mot de passe (il faudra peut-être mettre '' sous Windows)
        private $connexion;
        
        function __construct($host = null, $database = null, $user = null, $pass = null) {
    
          if($host != null){
            $this->host = $host;           
            $this->database = $database;
            $this->user = $user;
            $this->pass = $pass;
          }
          try {
            $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database,
                $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
                // echo "La connexion à bien été effectué !";
          } catch (PDOException $e){
                echo "Erreur de connexion à la base de donnée ! : " . $e->getMessage();
            die();
          }
        }
    
        public function connexion() {
            return $this->connexion;
        }
    }

    $DB = new connexionDB();
    $database = $DB->connexion();
?>