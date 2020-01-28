<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
    <title>LoginPhP</title>
</head>
<body>
<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <p id="profile-name" class="profile-name-card"></p>
            
        <p><a button class="btn btn-lg btn-primary btn-block btn-signin"href="http://localhost/loginPhP/login.php">Login!</a> <a button class="btn btn-lg btn-primary btn-block btn-signin"href="http://localhost/loginPhP/register.php">Register!</a></p>
        </div>
    </div>
</div>
</div>
    
</body>
</html>

<?php

    /*Ni ska skriva en webbapplikation som låter en användare registrera sig och logga in.
    All funktionalitet ska hanteras i en eller flera klasser.
    Varje klass ska ha sin egen fil och filerna ska placeras i en lämplig filstruktur.
    Metoder ska vara avgränsade och hantera en avgränsad uppgift. Jag vill alltså inte se en klass med en metod som gör allt.
    Ni ska säkra upp och modularisera era klasser med hjälp av synlighet (private, protected, public) och getters / setters.
    Användarna ska lagras i en MySQL-databas.
    Lösenord får inte sparas i klartext.
    När användaren har loggats in ska ni sätta en sessionsvariabel som håller reda på att användaren är inloggad, dess användarnamn och mailadress.
    Alla frågor mot databasen ska använda PDO och prepared statements.
    Koden ska följa PSR-2.
    Koden ska ha enhetstester.
    Alla i gruppen ska kunna redovisa varje del av koden.*/



?>