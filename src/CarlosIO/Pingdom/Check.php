<?php
namespace CarlosIO\Pingdom;

class Check
{
    /**
     * @var string Check name
     */
    private $_name;

    /**
     * @var string Check status
     */
    private $_status;

    /**
     * @var \CarlosIO\Pingdom\Account Parent account
     */
    private $_account;

    public function __construct($name, $status, \CarlosIO\Pingdom\Account $account)
    {
        $this->_name = $name;
        $this->_status = $status;
        $this->_account = $account;
    }

    /**
     * Returns check name
     *
     * @return string Check name
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Returns check status
     *
     * @return string Check status
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * Returns parent account
     *
     * @return \CarlosIO\Pingdom\Account Parent account
     */
    public function getAccount()
    {
        return $this->_account;
    }
}