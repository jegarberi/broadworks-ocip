<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackPrefixDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderExternalCustomRingbackGetRequest.
 */
class ServiceProviderExternalCustomRingbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderExternalCustomRingbackGetResponse';
    protected $prefixDigits;
    protected $serverNetAddress;
    protected $serverPort;
    protected $timeoutSeconds;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ServiceProviderExternalCustomRingbackGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPrefixDigits($prefixDigits = null)
    {
        $this->prefixDigits = ($prefixDigits InstanceOf ExternalCustomRingbackPrefixDigits)
             ? $prefixDigits
             : new ExternalCustomRingbackPrefixDigits($prefixDigits);
        $this->prefixDigits->setName('prefixDigits');
        return $this;
    }

    /**
     * 
     * @return ExternalCustomRingbackPrefixDigits $prefixDigits
     */
    public function getPrefixDigits()
    {
        return ($this->prefixDigits) ? $this->prefixDigits->getValue() : null;
    }

    /**
     * 
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
        $this->serverNetAddress->setName('serverNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $serverNetAddress
     */
    public function getServerNetAddress()
    {
        return ($this->serverNetAddress) ? $this->serverNetAddress->getValue() : null;
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
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf ExternalCustomRingbackTimeoutSeconds)
             ? $timeoutSeconds
             : new ExternalCustomRingbackTimeoutSeconds($timeoutSeconds);
        $this->timeoutSeconds->setName('timeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return ExternalCustomRingbackTimeoutSeconds $timeoutSeconds
     */
    public function getTimeoutSeconds()
    {
        return ($this->timeoutSeconds) ? $this->timeoutSeconds->getValue() : null;
    }
}