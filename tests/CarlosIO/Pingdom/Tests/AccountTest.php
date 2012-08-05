<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Account test cases
 */
class AccountTest extends \PHPUnit_Framework_TestCase
{
    public function testAccountCreationAndGetters()
    {
        $testUsername = 'hi@carlos.io';
        $testPassword = 'secretpassword';
        $testToken = 'secrettoken';

        $account = new \CarlosIO\Pingdom\Account($testUsername, $testPassword, $testToken);
        $this->assertSame($testUsername, $account->getUsername());
        $this->assertSame($testPassword, $account->getPassword());
        $this->assertSame($testToken, $account->getToken());

        $testUsername = 'hi2@carlos.io';
        $testPassword = 'secretpassword2';
        $testToken = 'secrettoken2';

        $account->setUsername($testUsername);
        $account->setPassword($testPassword);
        $account->setToken($testToken);

        $this->assertSame($testUsername, $account->getUsername());
        $this->assertSame($testPassword, $account->getPassword());
        $this->assertSame($testToken, $account->getToken());
    }
}
