<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Object test cases
 */
class ObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectAccountSettersAndGetters()
    {
        $testUsername = 'hi@carlos.io';
        $testPassword = 'secretpassword';
        $testToken = 'secrettoken';

        $testAccount = new \CarlosIO\Pingdom\Account($testUsername, $testPassword, $testToken);
        $object = new \CarlosIO\Pingdom\Object();
        $object->setAccount($testAccount);
        $account = $object->getAccount();

        $this->assertSame($account, $testAccount);
    }
}
