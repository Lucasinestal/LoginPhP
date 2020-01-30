<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <p id="profile-name" class="profile-name-card">
                <?php 
                    // include_once 'Classes/login.php';

                    if (!isset($_SESSION['username'])) {
                        echo 'You are not logged in!';
                    } else {
                        echo '<p>Welcome ' . $_SESSION['username'] . ' you are logged in!</p>';
                        // echo $_SESSION['username'];
                    }

                    // echo $_SESSION['email'];
                ?>
            </p>
     <a href="/loginPhP/logout.php"><button type="submit" class="btn btn-primary">Logout</button></a>
</body>
</html>