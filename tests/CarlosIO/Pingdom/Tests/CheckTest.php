<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Check test cases
 */
class CheckTest extends \PHPUnit_Framework_TestCase
{
    public function testCheckCreationAndGetters()
    {
        $data = json_decode(file_get_contents(STUB_PATH . '/checks.json'), true);
        /** @var $check \CarlosIO\Pingdom\Check */
        $check = \CarlosIO\Pingdom\Check::createFromArray($data['checks'][0]);

        $this->assertSame('example.com', $check->getHostname());
        $this->assertSame(85975, $check->getId());
        $this->assertSame(1297446423, $check->getLastErrorTime());
        $this->assertSame(355, $check->getLastResponseTime());
        $this->assertSame(1300977363, $check->getLastTestTime());
        $this->assertSame('My check 1', $check->getName());
        $this->assertSame(1, $check->getResolution());
        $this->assertSame('up', $check->getStatus());
        $this->assertSame('http', $check->getType());
    }
}
