<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Check test cases
 */
class CheckTest extends \PHPUnit_Framework_TestCase
{
    public function testCheckCreationAndGetters()
    {
        $testName = 'CarlosIO Website';
        $testStatus = 'ok';
        $testAccount = new \CarlosIO\Pingdom\Account('<user>', '<password>', '<token>');

        $check = new \CarlosIO\Pingdom\Check($testName, $testStatus, $testAccount);
        $this->assertSame($testName, $check->getName());
        $this->assertSame($testStatus, $check->getStatus());
        $this->assertSame($testAccount, $check->getAccount());
    }
}
