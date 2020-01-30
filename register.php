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

  $user->successRedirect();
  
 }

}
?>
<form action='register.php' method='post' id='register'>
    <input type='text' name='username' class='form-control' placeholder="Username" required value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES) : "";  ?>" /><br>
    <input type='password' name='password' class='form-control' placeholder="Password" required value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES) : "";  ?>" /><br>
    <input type='email' name='email' class='form-control' placeholder="Email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" /><br>
    <button type="submit" class="btn btn-primary">Register</button>
      
</form>