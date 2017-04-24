<?php

namespace a47ae\CatWebServiceClient;

use SoapClient;

class CatWebServiceClient extends SoapClient
{
    /**
     * @param array  $options A array of config values.
     * @param string $wsdl    The wsdl file to use.
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        $options = array_merge([ 'features' => 1 ], $options);

        if (!$wsdl) {
            $wsdl = 'http://localhost:12345/cat/cpp?wsdl';
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param string $session The session string.
     *
     * @return string
     */
    public function getMessage($session)
    {
        return $this->__soapCall('getMessage', array($session));
    }

    /**
     * @param string $password The password as defined in the web service config.
     *
     * @return string
     */
    public function getVersion($password)
    {
        return $this->__soapCall('getVersion', array($password));
    }

    /**
     * @param string $password The password as defined in the web service config.
     * @param string $folder   The name of the folder that will be created.
     *
     * @return string
     */
    public function createSession($password, $folder)
    {
        return $this->__soapCall('createSession', array($password, $folder));
    }

    /**
     * @param string $session The session string.
     * @param string $folder  The name of the new folder.
     *
     * @return boolean
     */
    public function changeFolder($session, $folder)
    {
        return $this->__soapCall('changeFolder', array($session, $folder));
    }

    /**
     * @param string $session The session string.
     * @param string $name    The name of the file.
     * @param string $data    The content of the file as string.
     *
     * @return boolean
     */
    public function uploadFile($session, $name, $data)
    {
        return $this->__soapCall('uploadFile', array($session, $name, $data));
    }

    /**
     * @param string $session The session string.
     *
     * @return boolean
     */
    public function createBinary($session)
    {
        return $this->__soapCall('createBinary', array($session));
    }

    /**
     * @param string $session The session string.
     * @param string $file    The name of the file that should be executed.
     *
     * @return boolean
     */
    public function executeFile($session, $file)
    {
        return $this->__soapCall('executeFile', array($session, $file));
    }

    /**
     * @param string $session The session string.
     *
     * @return string
     */
    public function getError($session)
    {
        return $this->__soapCall('getError', array($session));
    }

}
