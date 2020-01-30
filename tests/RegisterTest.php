<?php

namespace Test;

//Comments in this file are only for educational purpose

// Get namespace for TestCase
use PHPUnit\Framework\TestCase;

// Create a class, could be what ever classname you want,
// make sure you extend the class with TestCase.
class Test extends TestCase
{

    private $user;

    public function setUp():VOID
    {
        include "classes/register.php";
       
        
     
        $this->user = new \Register($db);
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
