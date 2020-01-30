<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{

    private $user;

    public function setUp():VOID
    {
        include "classes/register.php";
       
        
     
        $this->user = new \Classes\Register($db);
    }
    public function testRegister()
    {
        $this->user->username="testusername";
        $this->user->password="testpassword";
        $this->user->email="testemail";
        $this->assertTrue($this->user->register());
    }
    public function tearDown():VOID
    {
        $this->user->removeUser('testusername');
    }
}
