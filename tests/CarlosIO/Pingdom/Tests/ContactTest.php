<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Contact test cases
 */
class ContactTest extends \PHPUnit_Framework_TestCase
{
    public function testCheckCreationAndGetters()
    {
        $data = json_decode(file_get_contents(STUB_PATH . '/contacts.json'), true);
        /** @var $contact \CarlosIO\Pingdom\Contact */
        $contact = \CarlosIO\Pingdom\Contact::createFromArray($data['contacts'][0]);

        $this->assertSame(111250, $contact->getId());
        $this->assertSame('John Doe', $contact->getName());
        $this->assertSame('john@johnsdomain.com', $contact->getEmail());
        $this->assertSame('46-5555555', $contact->getCellphone());
        $this->assertSame('SE', $contact->getCountryIso());
        $this->assertSame('clickatell', $contact->getDefaultSmsProvider());
        $this->assertSame(false, $contact->getDirectTwitter());
        $this->assertSame(false, $contact->getPaused());
    }
}
