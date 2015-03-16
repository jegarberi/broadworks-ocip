<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingConfirmationToneTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingOriginatorCLIDPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Replaced by: GroupGroupPagingGetInstanceResponse17sp3
 *         Response to GroupGroupPagingGetInstanceRequest.
 *         Contains the service profile information.
 */
class GroupGroupPagingGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupGroupPagingGetInstanceResponse';
    protected $serviceInstanceProfile;
    protected $confirmationToneTimeoutSeconds;
    protected $deliverOriginatorCLIDInstead;
    protected $originatorCLIDPrefix;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupGroupPagingGetInstanceResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds = null)
    {
        $this->confirmationToneTimeoutSeconds = ($confirmationToneTimeoutSeconds InstanceOf GroupPagingConfirmationToneTimeoutSeconds)
             ? $confirmationToneTimeoutSeconds
             : new GroupPagingConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds);
        $this->confirmationToneTimeoutSeconds->setName('confirmationToneTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return GroupPagingConfirmationToneTimeoutSeconds $confirmationToneTimeoutSeconds
     */
    public function getConfirmationToneTimeoutSeconds()
    {
        return ($this->confirmationToneTimeoutSeconds) ? $this->confirmationToneTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setDeliverOriginatorCLIDInstead($deliverOriginatorCLIDInstead = null)
    {
        $this->deliverOriginatorCLIDInstead = new PrimitiveType($deliverOriginatorCLIDInstead);
        $this->deliverOriginatorCLIDInstead->setName('deliverOriginatorCLIDInstead');
        return $this;
    }

    /**
     * 
     * @return boolean $deliverOriginatorCLIDInstead
     */
    public function getDeliverOriginatorCLIDInstead()
    {
        return ($this->deliverOriginatorCLIDInstead) ? $this->deliverOriginatorCLIDInstead->getValue() : null;
    }

    /**
     * 
     */
    public function setOriginatorCLIDPrefix($originatorCLIDPrefix = null)
    {
        $this->originatorCLIDPrefix = ($originatorCLIDPrefix InstanceOf GroupPagingOriginatorCLIDPrefix)
             ? $originatorCLIDPrefix
             : new GroupPagingOriginatorCLIDPrefix($originatorCLIDPrefix);
        $this->originatorCLIDPrefix->setName('originatorCLIDPrefix');
        return $this;
    }

    /**
     * 
     * @return GroupPagingOriginatorCLIDPrefix $originatorCLIDPrefix
     */
    public function getOriginatorCLIDPrefix()
    {
        return ($this->originatorCLIDPrefix) ? $this->originatorCLIDPrefix->getValue() : null;
    }
}