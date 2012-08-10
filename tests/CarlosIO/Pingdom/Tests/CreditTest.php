<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Credit test cases
 */
class CreditTest extends \PHPUnit_Framework_TestCase
{
    public function testCreditCreationAndGetters()
    {
        $data = json_decode(file_get_contents(STUB_PATH . '/credits.json'), true);
        /** @var $item \CarlosIO\Pingdom\Credit */
        $item = \CarlosIO\Pingdom\Credit::createFromArray($data['credits']);

        $this->assertSame(false, $item->getAutoFillSms());
        $this->assertSame(46, $item->getAvailableChecks());
        $this->assertSame(98, $item->getAvailableSms());
        $this->assertSame(86, $item->getAvailableSmsTests());
        $this->assertSame(50, $item->getCheckLimit());
    }
}
