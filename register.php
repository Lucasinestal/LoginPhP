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

    // create the user
if($user->register()){

    echo "<div class='alert alert-info'>";
        echo "Successfully registered. <a href='http://test01.local/LoginPhP/register.php'>Please login</a>.";
    echo "</div>";
    }else {
    echo "<div class='alert alert-danger' role='alert'>Unable to register. Please try again.</div>";
    }
}
?>
<form action='register.php' method='post' id='register'>
    <input type='text' name='username' class='form-control' required value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES) : "";  ?>" />
    <input type='password' name='password' class='form-control' required value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES) : "";  ?>" />
    <input type='email' name='email' class='form-control' required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" />
    <button type="submit" class="btn btn-primary">Register</button>
      
</form>