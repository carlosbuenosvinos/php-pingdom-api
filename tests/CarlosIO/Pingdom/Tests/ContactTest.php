<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Contact test cases
 */
class ContactTest extends \PHPUnit_Framework_TestCase
{
    public function testContactCreationAndGetters()
    {
        $data = json_decode(file_get_contents(STUB_PATH . '/contacts.json'), true);
        /** @var $item \CarlosIO\Pingdom\Contact */
        $item = \CarlosIO\Pingdom\Contact::createFromArray($data['contacts'][0]);

        $this->assertSame(111250, $item->getId());
        $this->assertSame('John Doe', $item->getName());
        $this->assertSame('john@johnsdomain.com', $item->getEmail());
        $this->assertSame('46-5555555', $item->getCellphone());
        $this->assertSame('SE', $item->getCountryIso());
        $this->assertSame('clickatell', $item->getDefaultSmsProvider());
        $this->assertSame(false, $item->getDirectTwitter());
        $this->assertSame(false, $item->getPaused());
    }
}
