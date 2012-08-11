<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * Probe test cases
 */
class ProbeTest extends \PHPUnit_Framework_TestCase
{
    public function testProbeCreationAndGetters()
    {
        $data = json_decode(file_get_contents(STUB_PATH . '/probes.json'), true);

        /** @var $item \CarlosIO\Pingdom\Probe */
        $item = \CarlosIO\Pingdom\Probe::createFromArray($data['probes'][0]);

        $this->assertSame(1, $item->getId());
        $this->assertSame('United Kingdom', $item->getCountry());
        $this->assertSame('Manchester', $item->getCity());
        $this->assertSame('Manchester, UK', $item->getName());
        $this->assertSame(true, $item->getActive());
        $this->assertSame('s424.pingdom.com', $item->getHostname());
        $this->assertSame('212.84.74.156', $item->getIp());
        $this->assertSame('GB', $item->getCountryIso());
    }
}
