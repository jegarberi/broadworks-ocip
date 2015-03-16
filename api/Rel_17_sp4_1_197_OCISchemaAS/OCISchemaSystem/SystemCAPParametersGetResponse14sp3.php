<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPServerCallCenterMaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPConnectionPingIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CCC2MaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPMaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCAPParametersGetListRequest14sp3.
 *         Contains a list of system CAP parameters.
 */
class SystemCAPParametersGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCAPParametersGetResponse14sp3';
    protected $serverPort;
    protected $maxClientConnections;
    protected $enableConnectionPing;
    protected $connectionPingIntervalMinutes;
    protected $CCC2ServerPort;
    protected $CCC2MaxClientConnections;
    protected $capServerCallCenterPort;
    protected $capServerCallCenterMaxClientConnections;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCAPParametersGetResponse14sp3 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
        $this->serverPort->setName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $serverPort
     */
    public function getServerPort()
    {
        return ($this->serverPort) ? $this->serverPort->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxClientConnections($maxClientConnections = null)
    {
        $this->maxClientConnections = ($maxClientConnections InstanceOf CAPMaxClientConnections)
             ? $maxClientConnections
             : new CAPMaxClientConnections($maxClientConnections);
        $this->maxClientConnections->setName('maxClientConnections');
        return $this;
    }

    /**
     * 
     * @return CAPMaxClientConnections $maxClientConnections
     */
    public function getMaxClientConnections()
    {
        return ($this->maxClientConnections) ? $this->maxClientConnections->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableConnectionPing($enableConnectionPing = null)
    {
        $this->enableConnectionPing = new PrimitiveType($enableConnectionPing);
        $this->enableConnectionPing->setName('enableConnectionPing');
        return $this;
    }

    /**
     * 
     * @return boolean $enableConnectionPing
     */
    public function getEnableConnectionPing()
    {
        return ($this->enableConnectionPing) ? $this->enableConnectionPing->getValue() : null;
    }

    /**
     * 
     */
    public function setConnectionPingIntervalMinutes($connectionPingIntervalMinutes = null)
    {
        $this->connectionPingIntervalMinutes = ($connectionPingIntervalMinutes InstanceOf CAPConnectionPingIntervalMinutes)
             ? $connectionPingIntervalMinutes
             : new CAPConnectionPingIntervalMinutes($connectionPingIntervalMinutes);
        $this->connectionPingIntervalMinutes->setName('connectionPingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return CAPConnectionPingIntervalMinutes $connectionPingIntervalMinutes
     */
    public function getConnectionPingIntervalMinutes()
    {
        return ($this->connectionPingIntervalMinutes) ? $this->connectionPingIntervalMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setCCC2ServerPort($CCC2ServerPort = null)
    {
        $this->CCC2ServerPort = ($CCC2ServerPort InstanceOf Port1025)
             ? $CCC2ServerPort
             : new Port1025($CCC2ServerPort);
        $this->CCC2ServerPort->setName('CCC2ServerPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $CCC2ServerPort
     */
    public function getCCC2ServerPort()
    {
        return ($this->CCC2ServerPort) ? $this->CCC2ServerPort->getValue() : null;
    }

    /**
     * 
     */
    public function setCCC2MaxClientConnections($CCC2MaxClientConnections = null)
    {
        $this->CCC2MaxClientConnections = ($CCC2MaxClientConnections InstanceOf CCC2MaxClientConnections)
             ? $CCC2MaxClientConnections
             : new CCC2MaxClientConnections($CCC2MaxClientConnections);
        $this->CCC2MaxClientConnections->setName('CCC2MaxClientConnections');
        return $this;
    }

    /**
     * 
     * @return CCC2MaxClientConnections $CCC2MaxClientConnections
     */
    public function getCCC2MaxClientConnections()
    {
        return ($this->CCC2MaxClientConnections) ? $this->CCC2MaxClientConnections->getValue() : null;
    }

    /**
     * 
     */
    public function setCapServerCallCenterPort($capServerCallCenterPort = null)
    {
        $this->capServerCallCenterPort = ($capServerCallCenterPort InstanceOf Port1025)
             ? $capServerCallCenterPort
             : new Port1025($capServerCallCenterPort);
        $this->capServerCallCenterPort->setName('capServerCallCenterPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $capServerCallCenterPort
     */
    public function getCapServerCallCenterPort()
    {
        return ($this->capServerCallCenterPort) ? $this->capServerCallCenterPort->getValue() : null;
    }

    /**
     * 
     */
    public function setCapServerCallCenterMaxClientConnections($capServerCallCenterMaxClientConnections = null)
    {
        $this->capServerCallCenterMaxClientConnections = ($capServerCallCenterMaxClientConnections InstanceOf CAPServerCallCenterMaxClientConnections)
             ? $capServerCallCenterMaxClientConnections
             : new CAPServerCallCenterMaxClientConnections($capServerCallCenterMaxClientConnections);
        $this->capServerCallCenterMaxClientConnections->setName('capServerCallCenterMaxClientConnections');
        return $this;
    }

    /**
     * 
     * @return CAPServerCallCenterMaxClientConnections $capServerCallCenterMaxClientConnections
     */
    public function getCapServerCallCenterMaxClientConnections()
    {
        return ($this->capServerCallCenterMaxClientConnections) ? $this->capServerCallCenterMaxClientConnections->getValue() : null;
    }
}