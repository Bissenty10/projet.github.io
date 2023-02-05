<?php

    $dsn="mysql:host=localhost;dbname=docteur_db";
    $user="root";
    $motdepasse="";
    try {
      $con=new PDO($dsn,$user,$motdepasse);
      ///echo "Connexion à notre base de données reussi avec succés";
    } catch (PDOException $e) {
      print "Erreur !:".$e-> getmessage()."<br>";
      die();
    }
 ?>