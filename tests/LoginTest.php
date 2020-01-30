<?php

namespace Test;

use Classes;

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    private $loginUser;
    
    public function setUp():VOID
    {
        $database = new Classes\Connection();
        $db = $database->openConnection();
        $this->loginUser= new Classes\Login($db);
    }

    public function testIfWrongPassword()
    {
        $_POST['email'] = 'admin@admin.se';
        $_POST['password'] = 'wrongpassword';
        $this->loginUser->email=$_POST['email'];
        $this->loginUser->password=$_POST['password'];

        $this->assertEquals(null, $this->loginUser->login());
    }

    public function testIfWrongUser()
    {
        $_POST['email'] = 'felemail@email.se';
        
        $this->loginUser->email=$_POST['email'];

        $this->assertEquals(null, $this->loginUser->login());
    }
}
