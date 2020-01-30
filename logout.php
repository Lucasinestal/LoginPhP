<?php
    session_start();
    // include_once 'classes/login.php';
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
    <title>Logout</title>
</head>
<body>
    <h1>Logout</h1>
    <h3>Vill du logga in på nytt eller registrera?</h3>
    <a href="/loginPhP/login.php"><button type="submit" class="btn btn-primary">Login</button></a>
    <a href="/loginPhP/register.php"><button type="submit" class="btn btn-primary">Register</button></a>

<?php
    // $logout = new Login();
    // $logout->logout();

    $_SESSION = array();
    session_destroy();

    if (!isset($_SESSION['username'])) {
        echo "You are logged out";
    } else {
        echo "Your are still logged in!";
    }
?>

</body>
</html>

