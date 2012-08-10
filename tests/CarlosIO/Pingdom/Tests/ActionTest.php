<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Action test cases
 */
class ActionTest extends \PHPUnit_Framework_TestCase
{
    public function testActionCreationAndGetters()
    {
        $data = json_decode(file_get_contents(STUB_PATH . '/actions.json'), true);
        /** @var $item \CarlosIO\Pingdom\Action */
        $item = \CarlosIO\Pingdom\Action::createFromArray($data['actions']['alerts'][0]);

        $this->assertSame('John Doe', $item->getContactName());
        $this->assertSame(111250, $item->getContactId());
        $this->assertSame(241688, $item->getCheckId());
        $this->assertSame(1292248276, $item->getTime());
        $this->assertSame('sms', $item->getVia());
        $this->assertSame('delivered', $item->getStatus());
        $this->assertSame('up', $item->getMessageShort());
        $this->assertSame('PingdomAlert UP: MyCheck (example.com) is UP again at 2010-12-13 14:50:54. Downtime: 12m.', $item->getMessageFull());
        $this->assertSame('46-555555', $item->getSentTo());
        $this->assertSame(true, $item->getCharged());
    }
}
