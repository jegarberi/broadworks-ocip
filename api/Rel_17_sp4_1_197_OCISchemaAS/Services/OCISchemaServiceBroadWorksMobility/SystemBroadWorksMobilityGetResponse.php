<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\IMRNTimeoutMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The response to a SystemBroadWorksMobilityGetRequest.
 */
class SystemBroadWorksMobilityGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemBroadWorksMobilityGetResponse';
    protected $enableLocationServices;
    protected $enableMSRNLookup;
    protected $enableMobileStateChecking;
    protected $denyCallOriginations;
    protected $denyCallTerminations;
    protected $imrnTimeoutMillisecnds;
    protected $scfSignalingIPAddress;
    protected $scfSignalingPort;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableLocationServices($enableLocationServices = null)
    {
        $this->enableLocationServices = new PrimitiveType($enableLocationServices);
        $this->enableLocationServices->setName('enableLocationServices');
        return $this;
    }

    /**
     * 
     * @return boolean $enableLocationServices
     */
    public function getEnableLocationServices()
    {
        return ($this->enableLocationServices) ? $this->enableLocationServices->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableMSRNLookup($enableMSRNLookup = null)
    {
        $this->enableMSRNLookup = new PrimitiveType($enableMSRNLookup);
        $this->enableMSRNLookup->setName('enableMSRNLookup');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMSRNLookup
     */
    public function getEnableMSRNLookup()
    {
        return ($this->enableMSRNLookup) ? $this->enableMSRNLookup->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking = null)
    {
        $this->enableMobileStateChecking = new PrimitiveType($enableMobileStateChecking);
        $this->enableMobileStateChecking->setName('enableMobileStateChecking');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMobileStateChecking
     */
    public function getEnableMobileStateChecking()
    {
        return ($this->enableMobileStateChecking) ? $this->enableMobileStateChecking->getValue() : null;
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        $this->denyCallOriginations = new PrimitiveType($denyCallOriginations);
        $this->denyCallOriginations->setName('denyCallOriginations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallOriginations
     */
    public function getDenyCallOriginations()
    {
        return ($this->denyCallOriginations) ? $this->denyCallOriginations->getValue() : null;
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        $this->denyCallTerminations = new PrimitiveType($denyCallTerminations);
        $this->denyCallTerminations->setName('denyCallTerminations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallTerminations
     */
    public function getDenyCallTerminations()
    {
        return ($this->denyCallTerminations) ? $this->denyCallTerminations->getValue() : null;
    }

    /**
     * 
     */
    public function setImrnTimeoutMillisecnds($imrnTimeoutMillisecnds = null)
    {
        $this->imrnTimeoutMillisecnds = ($imrnTimeoutMillisecnds InstanceOf IMRNTimeoutMilliseconds)
             ? $imrnTimeoutMillisecnds
             : new IMRNTimeoutMilliseconds($imrnTimeoutMillisecnds);
        $this->imrnTimeoutMillisecnds->setName('imrnTimeoutMillisecnds');
        return $this;
    }

    /**
     * 
     * @return IMRNTimeoutMilliseconds $imrnTimeoutMillisecnds
     */
    public function getImrnTimeoutMillisecnds()
    {
        return ($this->imrnTimeoutMillisecnds) ? $this->imrnTimeoutMillisecnds->getValue() : null;
    }

    /**
     * 
     */
    public function setScfSignalingIPAddress($scfSignalingIPAddress = null)
    {
        $this->scfSignalingIPAddress = ($scfSignalingIPAddress InstanceOf IPAddress)
             ? $scfSignalingIPAddress
             : new IPAddress($scfSignalingIPAddress);
        $this->scfSignalingIPAddress->setName('scfSignalingIPAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $scfSignalingIPAddress
     */
    public function getScfSignalingIPAddress()
    {
        return ($this->scfSignalingIPAddress) ? $this->scfSignalingIPAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setScfSignalingPort($scfSignalingPort = null)
    {
        $this->scfSignalingPort = ($scfSignalingPort InstanceOf Port)
             ? $scfSignalingPort
             : new Port($scfSignalingPort);
        $this->scfSignalingPort->setName('scfSignalingPort');
        return $this;
    }

    /**
     * 
     * @return Port $scfSignalingPort
     */
    public function getScfSignalingPort()
    {
        return ($this->scfSignalingPort) ? $this->scfSignalingPort->getValue() : null;
    }
}