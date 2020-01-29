
<?php
//session_start();
// core configuration
//include_once "config/core.php";

// set page title

// include login checker
//include_once "login_checker.php";

// include classes
include_once 'Classes/connection.php';
include_once 'Classes/login.php';
//include_once "libs/php/utils.php";
$loginUser= new Login($db);
// include page header HTML
//include_once "layout_head.php";
if($_POST){

    $database = new Connection();
    $db = $database->openConnection();

    $loginUser->email=$_POST['email'];
    $loginUser->password=$_POST['password'];
    $loginUser->login();
}



/*if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $loginUser->getUser($_POST['email'], $_POST['password']);
}*/

   ?> 



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Login</title>
</head>
<body>

<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <p id="profile-name" class="profile-name-card"></p>

    <form action="login.php" method="POST">
         <input type="email" name="email" placeholder="email"><br>
         <input type="password" name="password" placeholder="password"><br>
         <br>
        <input type="submit" value="submit" button class="btn btn-lg btn-primary btn-block btn-signin">
    </form>
</body>
</html>

