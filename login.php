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
include_once 'Classes/register.php';


$loginUser= new Login($db);

if ($_POST) {
    $database = new Connection();
    $db = $database->openConnection();

    //$email = $_POST["email"];
    //$password = $_POST["password"];
    
    $loginUser->email=$_POST['email'];
    $loginUser->password=$_POST['password'];
    $loginUser->login();
}

session_start();
?> 



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Login</title>
</head>
<body>

<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <p id="profile-name" class="profile-name-card"></p>
    <?php echo $_SESSION["success"];?>
    <form action="login.php" method="POST">
        <h4>Sign in</h4>
        <?php $_SESSION["error"]?>
         <input type="email" name="email" placeholder="email" required><br>
         <input type="password" name="password" placeholder="password" required><br>
         <br>
        <input type="submit" value="submit" button class="btn btn-lg btn-primary btn-block btn-signin">
    </form>
</body>
</html>

