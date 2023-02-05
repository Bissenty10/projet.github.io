<?php
session_start();
if (!isset($_SESSION["nom"])) {
  header('Location:accueil.php');
}
include'connexion.php';
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
    <a href="#" class="logo"><i class="fas fa-heartbeat"></i>Allô <span>Docteur </span></a>
<nav class="navbar">
<a href="index.php">home</a>
<a href="services.php">Services</a>
<a href="about.php">About</a>
<a href="doctor.php">Doctors</a>
<a href="book.php">book</a>
<a href="accueil.php">Deconexion</a>
    </nav>
</header>

<section class="home" id="home">
<div class="image">
    <img src="./img/allo.png" alt="">
</div>
 <div class="content">
    <h3> Se Proteger et Proteger les autres</h3>
    <p>La santé c'est comme la richesse, il ne suffit pas de l'avoir, il faut savoir la conserver</p>
</section>


<section class="icons-container">
<div class="icons">
<i class="fas fa-user-md"></i>
<h3>100+</h3>
<p>Docteurs</p>
</div>

<div class="icons">
    <i class="fas fa-users"></i>
    <h3>1000+</h3>
    <p>Patients Satisfait</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>Lit</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>80+</h3>
            <p>Hopital Disponible</p>
            </div>
</section>


<script src="js/script.js"></script>
</body>
</html>