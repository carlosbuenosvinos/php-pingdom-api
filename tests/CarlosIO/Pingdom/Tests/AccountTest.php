<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Account test cases
 */
class AccountTest extends \PHPUnit_Framework_TestCase
{
    public function testJsonReturnsJsonResponse()
    {
        $testUsername = 'hi@carlos.io';
        $testPassword = 'secretpassword';
        $testToken = 'secrettoken';

        $account = new \CarlosIO\Pingdom\Account($testUsername, $testPassword, $testToken);
        $this->assertSame($testUsername, $account->getUsername());
        $this->assertSame($testPassword, $account->getPassword());
        $this->assertSame($testToken, $account->getToken());
    }
}
