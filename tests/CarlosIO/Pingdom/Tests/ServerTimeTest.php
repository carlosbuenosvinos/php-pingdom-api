<?php

namespace CarlosIO\Pingdom\Tests;

/**
 * ServerTime test cases
 */
class ServerTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testServerTimeCreationAndGetters()
    {
        $data = json_decode(file_get_contents(STUB_PATH . '/servertime.json'), true);

        /** @var $item \CarlosIO\Pingdom\ServerTime */
        $item = \CarlosIO\Pingdom\ServerTime::createFromArray($data);

        $this->assertSame(1294237910, $item->getServerTime());
    }
}
