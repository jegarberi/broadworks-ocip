<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\RoutePointCallFailureTimeout;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the route point failover policy. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyFailoverPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointModifyFailoverPolicyRequest';
    protected $serviceUserId;
    protected $enableFailoverSupport;
    protected $externalSystem;
    protected $failoverPhoneNumber;
    protected $perCallEnableFailoverSupport;
    protected $perCallCallFailureTimeoutSeconds;
    protected $perCallOutboundCallFailureTimeoutSeconds;
    protected $perCallFailoverPhoneNumber;

    public function __construct(
         $serviceUserId = '',
         $enableFailoverSupport = null,
         $externalSystem = null,
         $failoverPhoneNumber = null,
         $perCallEnableFailoverSupport = null,
         $perCallCallFailureTimeoutSeconds = null,
         $perCallOutboundCallFailureTimeoutSeconds = null,
         $perCallFailoverPhoneNumber = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableFailoverSupport($enableFailoverSupport);
        $this->setExternalSystem($externalSystem);
        $this->setFailoverPhoneNumber($failoverPhoneNumber);
        $this->setPerCallEnableFailoverSupport($perCallEnableFailoverSupport);
        $this->setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds);
        $this->setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds);
        $this->setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableFailoverSupport($enableFailoverSupport = null)
    {
        $this->enableFailoverSupport = new PrimitiveType($enableFailoverSupport);
        $this->enableFailoverSupport->setName('enableFailoverSupport');
        return $this;
    }

    /**
     * 
     * @return boolean $enableFailoverSupport
     */
    public function getEnableFailoverSupport()
    {
        return ($this->enableFailoverSupport) ? $this->enableFailoverSupport->getValue() : null;
    }

    /**
     * 
     */
    public function setExternalSystem($externalSystem = null)
    {
        $this->externalSystem = ($externalSystem InstanceOf RoutePointExternalSystem)
             ? $externalSystem
             : new RoutePointExternalSystem($externalSystem);
        $this->externalSystem->setName('externalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $externalSystem
     */
    public function getExternalSystem()
    {
        return ($this->externalSystem) ? $this->externalSystem->getValue() : null;
    }

    /**
     * 
     */
    public function setFailoverPhoneNumber($failoverPhoneNumber = null)
    {
        $this->failoverPhoneNumber = ($failoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $failoverPhoneNumber
             : new OutgoingDNorSIPURI($failoverPhoneNumber);
        $this->failoverPhoneNumber->setName('failoverPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $failoverPhoneNumber
     */
    public function getFailoverPhoneNumber()
    {
        return ($this->failoverPhoneNumber) ? $this->failoverPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setPerCallEnableFailoverSupport($perCallEnableFailoverSupport = null)
    {
        $this->perCallEnableFailoverSupport = new PrimitiveType($perCallEnableFailoverSupport);
        $this->perCallEnableFailoverSupport->setName('perCallEnableFailoverSupport');
        return $this;
    }

    /**
     * 
     * @return boolean $perCallEnableFailoverSupport
     */
    public function getPerCallEnableFailoverSupport()
    {
        return ($this->perCallEnableFailoverSupport) ? $this->perCallEnableFailoverSupport->getValue() : null;
    }

    /**
     * 
     */
    public function setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds = null)
    {
        $this->perCallCallFailureTimeoutSeconds = ($perCallCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallCallFailureTimeoutSeconds);
        $this->perCallCallFailureTimeoutSeconds->setName('perCallCallFailureTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return RoutePointCallFailureTimeout $perCallCallFailureTimeoutSeconds
     */
    public function getPerCallCallFailureTimeoutSeconds()
    {
        return ($this->perCallCallFailureTimeoutSeconds) ? $this->perCallCallFailureTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds = null)
    {
        $this->perCallOutboundCallFailureTimeoutSeconds = ($perCallOutboundCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallOutboundCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallOutboundCallFailureTimeoutSeconds);
        $this->perCallOutboundCallFailureTimeoutSeconds->setName('perCallOutboundCallFailureTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return RoutePointCallFailureTimeout $perCallOutboundCallFailureTimeoutSeconds
     */
    public function getPerCallOutboundCallFailureTimeoutSeconds()
    {
        return ($this->perCallOutboundCallFailureTimeoutSeconds) ? $this->perCallOutboundCallFailureTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber = null)
    {
        $this->perCallFailoverPhoneNumber = ($perCallFailoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $perCallFailoverPhoneNumber
             : new OutgoingDNorSIPURI($perCallFailoverPhoneNumber);
        $this->perCallFailoverPhoneNumber->setName('perCallFailoverPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $perCallFailoverPhoneNumber
     */
    public function getPerCallFailoverPhoneNumber()
    {
        return ($this->perCallFailoverPhoneNumber) ? $this->perCallFailoverPhoneNumber->getValue() : null;
    }
}