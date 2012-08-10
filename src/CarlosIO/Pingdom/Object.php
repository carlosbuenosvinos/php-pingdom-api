<?php
namespace CarlosIO\Pingdom;

class Object
{
    /**
     * @var array Element data
     */
    protected $_data = array();

    /**
     * @var \CarlosIO\Pingdom\Account Parent account
     */
    protected $_account;

    /**
     * Returns parent account
     *
     * @return \CarlosIO\Pingdom\Account Parent account
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Sets parent account
     *
     * @param \CarlosIO\Pingdom\Account Parent account
     */
    public function setAccount(\CarlosIO\Pingdom\Account $account)
    {
        $this->_account = $account;
    }

    public static function createFromArray($array)
    {
        $newElement = new static();
        $newElement->_data = $array;
        // $newElement->_account = $account;
        return $newElement;
    }

    protected function _getProperty($name)
    {
        if (array_key_exists($name, $this->_data)) {
            return $this->_data[$name];
        }

        return null;
    }
}