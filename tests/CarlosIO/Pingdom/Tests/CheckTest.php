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
        /** @var $item \CarlosIO\Pingdom\Check */
        $item = \CarlosIO\Pingdom\Check::createFromArray($data['checks'][0]);

        $this->assertSame('example.com', $item->getHostname());
        $this->assertSame(85975, $item->getId());
        $this->assertSame(1297446423, $item->getLastErrorTime());
        $this->assertSame(355, $item->getLastResponseTime());
        $this->assertSame(1300977363, $item->getLastTestTime());
        $this->assertSame('My check 1', $item->getName());
        $this->assertSame(1, $item->getResolution());
        $this->assertSame('up', $item->getStatus());
        $this->assertSame('http', $item->getType());
        $this->assertSame(null, $item->getCreated());
    }
}
