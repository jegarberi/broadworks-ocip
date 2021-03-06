<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditTimeoutPeriodSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditIntervalSeconds;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemSessionAuditGetRequest.
 *         Replaced By: SystemSessionAuditGetResponse14sp3
 */
class SystemSessionAuditGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSessionAuditGetResponse';
    protected $isActive;
    protected $intervalSeconds;
    protected $timeoutPeriodSeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemSessionAuditGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIntervalSeconds($intervalSeconds = null)
    {
        $this->intervalSeconds = ($intervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $intervalSeconds
             : new SessionAuditIntervalSeconds($intervalSeconds);
        $this->intervalSeconds->setElementName('intervalSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditIntervalSeconds $intervalSeconds
     */
    public function getIntervalSeconds()
    {
        return ($this->intervalSeconds)
            ? $this->intervalSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeoutPeriodSeconds($timeoutPeriodSeconds = null)
    {
        $this->timeoutPeriodSeconds = ($timeoutPeriodSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $timeoutPeriodSeconds
             : new SessionAuditTimeoutPeriodSeconds($timeoutPeriodSeconds);
        $this->timeoutPeriodSeconds->setElementName('timeoutPeriodSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditTimeoutPeriodSeconds $timeoutPeriodSeconds
     */
    public function getTimeoutPeriodSeconds()
    {
        return ($this->timeoutPeriodSeconds)
            ? $this->timeoutPeriodSeconds->getElementValue()
            : null;
    }
}
