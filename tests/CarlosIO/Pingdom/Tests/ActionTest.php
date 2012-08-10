<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Action test cases
 */
class ActionTest extends \PHPUnit_Framework_TestCase
{
    public function testCheckCreationAndGetters()
    {
        $data = json_decode(file_get_contents(STUB_PATH . '/actions.json'), true);
        /** @var $action \CarlosIO\Pingdom\Action */
        $action = \CarlosIO\Pingdom\Action::createFromArray($data['actions']['alerts'][0]);

        $this->assertSame('John Doe', $action->getContactName());
        $this->assertSame(111250, $action->getContactId());
        $this->assertSame(241688, $action->getCheckId());
        $this->assertSame(1292248276, $action->getTime());
        $this->assertSame('sms', $action->getVia());
        $this->assertSame('delivered', $action->getStatus());
        $this->assertSame('up', $action->getMessageShort());
        $this->assertSame('PingdomAlert UP: MyCheck (example.com) is UP again at 2010-12-13 14:50:54. Downtime: 12m.', $action->getMessageFull());
        $this->assertSame('46-555555', $action->getSentTo());
        $this->assertSame(true, $action->getCharged());
    }
}
