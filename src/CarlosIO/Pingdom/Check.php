<?php
namespace CarlosIO\Pingdom;

class Check extends \CarlosIO\Pingdom\Object
{
    /**
     * Returns Check identifier
     *
     * @return int
     */
    public function getId()
    {
        return $this->_getProperty('id');
    }

    /**
     * Returns Check name
     *
     * @return string
     */
    public function getName()
    {
        return $this->_getProperty('name');
    }

    /**
     * Returns Check type
     *
     * @return string Check name
     */
    public function getType()
    {
        return $this->_getProperty('type');
    }

    /**
     * Returns Timestamp of last error (if any). Format is UNIX timestamp
     *
     * @return int
     */
    public function getLastErrorTime()
    {
        return $this->_getProperty('lasterrortime');
    }

    /**
     * Returns Timestamp of last test (if any). Format is UNIX timestamp
     *
     * @return int
     */
    public function getLastTestTime()
    {
        return $this->_getProperty('lasttesttime');
    }

    /**
     * Returns Response time (in milliseconds) of last test
     *
     * @return int
     */
    public function getLastResponseTime()
    {
        return $this->_getProperty('lastresponsetime');
    }

    /**
     * Returns Current status of check
     *
     * @return string up, down, unconfirmed_down, unknown, paused
     */
    public function getStatus()
    {
        return $this->_getProperty('status');
    }

    /**
     * Returns How often should the check be tested? (minutes)
     *
     * @return int
     */
    public function getResolution()
    {
        return $this->_getProperty('resolution');
    }

    /**
     * Returns Target host
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->_getProperty('hostname');
    }

    /**
     * Returns Creating time. Format is UNIX timestamp
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->_getProperty('created');
    }
}