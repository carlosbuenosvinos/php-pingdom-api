<?php
namespace CarlosIO\Pingdom;

class Action extends \CarlosIO\Pingdom\Object
{
    /**
     * Returns
     *
     * @return string Check name
     */
    public function getCharged()
    {
        return $this->_getProperty('charged');
    }

    /**
     * Returns
     *
     * @return string Check name
     */
    public function getSentTo()
    {
        return $this->_getProperty('sentto');
    }

    /**
     * Returns
     *
     * @return string Check name
     */
    public function getMessageFull()
    {
        return $this->_getProperty('messagefull');
    }

    /**
     * Returns
     *
     * @return string Check name
     */
    public function getMessageShort()
    {
        return $this->_getProperty('messageshort');
    }


    /**
     * Returns
     *
     * @return string Check name
     */
    public function getStatus()
    {
        return $this->_getProperty('status');
    }


    /**
     * Returns
     *
     * @return string Check name
     */
    public function getVia()
    {
        return $this->_getProperty('via');
    }

    /**
     * Returns
     *
     * @return string Check name
     */
    public function getTime()
    {
        return $this->_getProperty('time');
    }

    /**
     * Returns
     *
     * @return string Check name
     */
    public function getCheckId()
    {
        return $this->_getProperty('checkid');
    }

    /**
     * Returns
     *
     * @return string Check name
     */
    public function getContactId()
    {
        return $this->_getProperty('contactid');
    }

    /**
     * Returns
     *
     * @return string Check name
     */
    public function getContactName()
    {
        return $this->_getProperty('contactname');
    }
}