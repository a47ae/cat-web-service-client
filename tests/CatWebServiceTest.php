<?php


use a47ae\CatWebServiceClient\CatWebServiceClient;

class CatWebServiceTest extends PHPUnit\Framework\TestCase {

    /**
     * @var CatWebServiceClient
     */
    private $client;
    private $password;
    private $session;

    protected function setUp()
    {
        $wsdl = getenv('WSDL_URI');

        $this->password = getenv('PASSWORD');
        $this->client = new CatWebServiceClient([], $wsdl);

        $this->session = $this->client->createSession($this->password, uniqid());
    }

    public function testIsGetsTheVersion()
    {
        $version = $this->client->getVersion($this->password);
        $this->assertInternalType('string', $version);
    }

    public function testItCanCreateASession()
    {
        $session = $this->client->createSession($this->password, uniqid());

        $this->assertNotEmpty($session);
        $this->assertInternalType('string', $session);
    }
}