<?php


use PHPUnit\Framework\TestCase;

include "./User.php";

class UserTest extends TestCase
{
    public function testValidUser()
    {
        $user = new User("loan.besson@hotmail.fr", "loan", "besson", "1999-09-18");
        return $this->assertEquals(true, $user->isValid(), 'User1 is Invalid !');
    }

    public function testInvalidUser()
    {
        $user = new User("loan.besson@hotmail.fr", "loan", "besson", "2015-09-18");
        return $this->assertEquals(true, $user->isValid(), 'User2 is Invalid !');
    }
}
