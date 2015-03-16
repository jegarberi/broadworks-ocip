<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterRoutingPriorityOrder;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyRoutingPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterModifyRoutingPolicyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $routingPolicy;
    protected $routingPriorityOrder;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $routingPolicy = null,
         CallCenterRoutingPriorityOrder $routingPriorityOrder = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setRoutingPolicy($routingPolicy);
        $this->setRoutingPriorityOrder($routingPriorityOrder);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setRoutingPolicy($routingPolicy = null)
    {
        $this->routingPolicy = ($routingPolicy InstanceOf CallCenterRoutingPolicy)
             ? $routingPolicy
             : new CallCenterRoutingPolicy($routingPolicy);
        $this->routingPolicy->setName('routingPolicy');
        return $this;
    }

    /**
     * 
     * @return CallCenterRoutingPolicy $routingPolicy
     */
    public function getRoutingPolicy()
    {
        return ($this->routingPolicy) ? $this->routingPolicy->getValue() : null;
    }

    /**
     * 
     */
    public function setRoutingPriorityOrder(CallCenterRoutingPriorityOrder $routingPriorityOrder = null)
    {
        $this->routingPriorityOrder = ($routingPriorityOrder InstanceOf CallCenterRoutingPriorityOrder)
             ? $routingPriorityOrder
             : new CallCenterRoutingPriorityOrder($routingPriorityOrder);
        $this->routingPriorityOrder->setName('routingPriorityOrder');
        return $this;
    }

    /**
     * 
     * @return CallCenterRoutingPriorityOrder $routingPriorityOrder
     */
    public function getRoutingPriorityOrder()
    {
        return $this->routingPriorityOrder;
    }
}