<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentUnavailableCodeStateModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterAgentUnavailableCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterAgentUnavailableCodeSettingsModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $enableAgentUnavailableCodes;
    protected $defaultAgentUnavailableCodeOnDND;
    protected $defaultAgentUnavailableCodeOnPersonalCalls;
    protected $defaultAgentUnavailableCodeOnConsecutiveBounces;
    protected $forceUseOfAgentUnavailableCodes;
    protected $defaultAgentUnavailableCode;
    protected $codeStateList;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $enableAgentUnavailableCodes = null,
         $defaultAgentUnavailableCodeOnDND = null,
         $defaultAgentUnavailableCodeOnPersonalCalls = null,
         $defaultAgentUnavailableCodeOnConsecutiveBounces = null,
         $forceUseOfAgentUnavailableCodes = null,
         $defaultAgentUnavailableCode = null,
         CallCenterAgentUnavailableCodeStateModify $codeStateList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setEnableAgentUnavailableCodes($enableAgentUnavailableCodes);
        $this->setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND);
        $this->setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls);
        $this->setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces);
        $this->setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes);
        $this->setDefaultAgentUnavailableCode($defaultAgentUnavailableCode);
        $this->setCodeStateList($codeStateList);
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
    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes = null)
    {
        $this->enableAgentUnavailableCodes = new PrimitiveType($enableAgentUnavailableCodes);
        $this->enableAgentUnavailableCodes->setName('enableAgentUnavailableCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAgentUnavailableCodes
     */
    public function getEnableAgentUnavailableCodes()
    {
        return ($this->enableAgentUnavailableCodes) ? $this->enableAgentUnavailableCodes->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND = null)
    {
        $this->defaultAgentUnavailableCodeOnDND = ($defaultAgentUnavailableCodeOnDND InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnDND
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnDND);
        $this->defaultAgentUnavailableCodeOnDND->setName('defaultAgentUnavailableCodeOnDND');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCodeOnDND
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return ($this->defaultAgentUnavailableCodeOnDND) ? $this->defaultAgentUnavailableCodeOnDND->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls = null)
    {
        $this->defaultAgentUnavailableCodeOnPersonalCalls = ($defaultAgentUnavailableCodeOnPersonalCalls InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnPersonalCalls
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnPersonalCalls);
        $this->defaultAgentUnavailableCodeOnPersonalCalls->setName('defaultAgentUnavailableCodeOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCodeOnPersonalCalls
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return ($this->defaultAgentUnavailableCodeOnPersonalCalls) ? $this->defaultAgentUnavailableCodeOnPersonalCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces = null)
    {
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = ($defaultAgentUnavailableCodeOnConsecutiveBounces InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCodeOnConsecutiveBounces
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCodeOnConsecutiveBounces);
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces->setName('defaultAgentUnavailableCodeOnConsecutiveBounces');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCodeOnConsecutiveBounces
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return ($this->defaultAgentUnavailableCodeOnConsecutiveBounces) ? $this->defaultAgentUnavailableCodeOnConsecutiveBounces->getValue() : null;
    }

    /**
     * 
     */
    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes = null)
    {
        $this->forceUseOfAgentUnavailableCodes = new PrimitiveType($forceUseOfAgentUnavailableCodes);
        $this->forceUseOfAgentUnavailableCodes->setName('forceUseOfAgentUnavailableCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $forceUseOfAgentUnavailableCodes
     */
    public function getForceUseOfAgentUnavailableCodes()
    {
        return ($this->forceUseOfAgentUnavailableCodes) ? $this->forceUseOfAgentUnavailableCodes->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode = null)
    {
        $this->defaultAgentUnavailableCode = ($defaultAgentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $defaultAgentUnavailableCode
             : new CallCenterAgentUnavailableCode($defaultAgentUnavailableCode);
        $this->defaultAgentUnavailableCode->setName('defaultAgentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $defaultAgentUnavailableCode
     */
    public function getDefaultAgentUnavailableCode()
    {
        return ($this->defaultAgentUnavailableCode) ? $this->defaultAgentUnavailableCode->getValue() : null;
    }

    /**
     * 
     */
    public function setCodeStateList(CallCenterAgentUnavailableCodeStateModify $codeStateList = null)
    {
        $this->codeStateList = ($codeStateList InstanceOf CallCenterAgentUnavailableCodeStateModify)
             ? $codeStateList
             : new CallCenterAgentUnavailableCodeStateModify($codeStateList);
        $this->codeStateList->setName('codeStateList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCodeStateModify $codeStateList
     */
    public function getCodeStateList()
    {
        return $this->codeStateList;
    }
}