<?php

    $dsn="mysql:host=localhost;dbname=docteur_db";
    $user="root";
    $motdepasse="";
    try {
      $con=new PDO($dsn,$user,$motdepasse);
      echo "Connexion à notre base de données reussi avec succés";
    } catch (PDOException $e) {
      print "Erreur !:".$e-> getmessage()."<br>";
      die();
    }
 ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<link rel="stylesheet" href="style.css">


</head>
<body>
    
<header class="header">
    <a href="#" class="logo"><i class="fas fa-heartbeat"></i>Allô<span>Docteur</span></a>
<nav class="navbar">
<a href="index.php">home</a>
<a href="services.php">Services</a>
<a href="about.php">About</a>
<a href="doctors.php">Doctors</a>
<a href="book.php">book</a>
<a href="accueil.php">Deconexion</a>
    </nav>
</header>


<section class="doctor" id="doctor">
    <h1 class="heading">Nos <span>Docteur</span ></h1>
<div class="box-container">

    <div class="box">
        <img src="./img/doc1.jpg" alt="">
        <h3>Dr BEYE</h3>
        <span>Expert Doctor</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="./img/doc2.jpg" alt="">
        <h3>Dr SY</h3>
        <span>Expert Doctor</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="./img/doc3.jpg" alt="">
        <h3> Dr PREIRA</h3>
        <span>Neurologue</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="./img/doc4.jpg" alt="">
        <h3>Dr GOMIS</h3>
        <span>Genycologue</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="./img/doc5.jpg" alt="">
        <h3>Dr BOISSY</h3>
        <span>Neurologue </span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="./img/doc6.jpg" alt="">
        <h3>Dr Fall</h3>
        <span>Oftalmologue</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="./img/doc7.jpg" alt="">
        <h3>Dr MENDY</h3>
        <span>Pediatre</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="./img/doc8.jpg" alt="">
        <h3>Dr DIEME</h3>
        <span>Dentiste</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

</div>


</section>

<div class="credit"> Created by <span> Bissenty Victor Mendy@</span>Project IG3/2022-2023</div>




<script src="js/script.js"></script>
</body>
</html>