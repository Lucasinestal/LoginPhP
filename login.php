<?php


session_start();
// core configuration
//include_once "config/core.php";

// set page title

// include login checker
//include_once "login_checker.php";

// include classes
include_once 'Classes/connection.php';
include_once 'Classes/login.php';
include_once 'Classes/register.php';


$success = new Classes\Register($db);
$loginUser= new Classes\Login($db);

if ($_POST) {
    $database = new Classes\Connection();
    $db = $database->openConnection();

    //$email = $_POST["email"];
    //$password = $_POST["password"];
    
    $loginUser->email=$_POST['email'];
    $loginUser->password=$_POST['password'];
    $loginUser->login();
}

//session_start();
?> 



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="d-flex align-items-center">
    <div class="container d-flex w-25 shadow rounded flex-column p-4 justify-content-center align-items-center">
        <h2 class="p-3">Login</h2>
        <form action='login.php' method='post' id='login'>
            <input type='email' name='email' class='form-control' placeholder="email" required/><br>
            <input type='password' name='password' class='form-control' placeholder="Password" required/><br>
            <button type="submit" class="btn btn-primary">Login</button>
            <p>Already have an account? <a href="#">Register</a></p>
        </form>
    </div>  
</body>
</html>

