
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="d-flex align-items-center">
    <div class="container d-flex w-25 shadow rounded flex-column p-4 justify-content-center align-items-center">
        <h2 class="p-3">Register</h2>
<?php

// set page title
$page_title = "Register";

// include Classes
include_once 'Classes/connection.php';
include_once 'Classes/register.php';

$user = new Register($db);
if($_POST){

    // get database connection
    $database = new Connection();
    $db = $database->openConnection();

    $user->username=$_POST['username'];
    $user->password=$_POST['password'];
    $user->email=$_POST['email'];




         if($user->register()){ $user->successMsg();} } ?>
        <form action='register.php' method='post' id='register'>
            <input type='text' name='username' class='form-control' placeholder="Username" required value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES) : "";  ?>" /><br>
            <input type='password' name='password' class='form-control' placeholder="Password" required value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES) : "";  ?>" /><br>
            <input type='email' name='email' class='form-control' placeholder="Email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" /><br>
            <button type="submit" class="btn btn-primary">Register</button>
            <p>Already have an account? <a href="#">Login</a></p>
        </form>
    </div>
</body>
</html>
