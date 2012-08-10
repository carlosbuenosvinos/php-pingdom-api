<?php
namespace CarlosIO\Pingdom;

class Account
{
    const URL_REST = 'https://api.pingdom.com/api/2.0';

    /**
     * @var string Account username
     */
    private $_username;

    /**
     * @var string Account password
     */
    private $_password;

    /**
     * @var string Account API token (32 chars)
     */
    private $_token;

    /**
     * @var \Guzzle\Service\Client HTTP Client to use
     */
    private $_client = null;

    /**
     * Builds a Pingdom Client
     *
     * @param string $username
     * @param string $password
     * @param string $token
     */
    public function __construct($username, $password, $token)
    {
        $this->_username = $username;
        $this->_password = $password;
        $this->_token = $token;
    }

    /**
     * Returns username account
     *
     * @return string Username
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * Returns password account
     *
     * @return string Password
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * Returns token account
     *
     * @return string Token (32 chars)
     */
    public function getToken()
    {
        return $this->_token;
    }

    /**
     * Sets username account
     *
     * @param string username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * Sets password account
     *
     * @param string password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

    /**
     * Sets token account
     *
     * @param string Token (32 chars)
     */
    public function setToken($token)
    {
        $this->_token = $token;
    }

    public function setHttpClient($client)
    {
        $this->_client = $client;
    }

    /**
     * Returns a list overview of all checks from current accounts
     *
     * @throws \Exception
     * @return array<\CarlosIO\Pingdom\Checks> All checks
     */
    public function getChecks()
    {
        $client = $this->_client;
        if (null === $client) {
            $client = new \Guzzle\Service\Client(static::URL_REST);
        }

        /** @var $request \Guzzle\Http\Message\Request */
        $request = $client->get('checks', array('App-Key' => $this->getToken()));
        $request->setAuth($this->getUsername(), $this->getPassword());
        $response = $request->send();

        // Execute the request and decode the json result into an associative array
        $response = json_decode($response->getBody(), true);

        // Check for errors returned by the API
        if (isset($response['error'])) {
            throw new \Exception("Error: " . $response['error']['errormessage']);
        }

        // Fetch the list of checks from the response
        $checksList = $response['checks'];
        $result = array();

        // Print the names and statuses of all checks in the list
        foreach ($checksList as $check) {
            $result[] = \CarlosIO\Pingdom\Check::createFromArray($check, $this);
        }

        return $result;
    }
}