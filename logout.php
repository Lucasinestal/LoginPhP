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
<body class="d-flex align-items-center">
    <div class="container d-flex w-25 shadow rounded flex-column p-4 justify-content-center align-items-center">
        <h2 class="p-3">Logged out</h2>
        <h3>Vill du logga in på nytt eller registrera?</h3>
        <a href="/loginPhP/login.php"><button type="submit" class="btn btn-primary">Login</button></a><br>
        <a href="/loginPhP/register.php"><button type="submit" class="btn btn-primary">Register</button></a>
        
        <?php
            $_SESSION = array();
            session_destroy();

            if (!isset($_SESSION['username'])) {
                echo "<p>You are " . $_SESSION['username'] . " logged out</p>";
            } else {
                echo "<p>Your are still logged in!</p>";
            }
        ?>

    </div>

</body>
</html>

