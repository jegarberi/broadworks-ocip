<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's call forwarding selective service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallForwardingSelectiveModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallForwardingSelectiveModifyRequest';
    protected $userId;
    protected $isActive;
    protected $defaultForwardToPhoneNumber;
    protected $playRingReminder;
    protected $criteriaActivation;

    public function __construct(
         $userId = '',
         $isActive = null,
         $defaultForwardToPhoneNumber = null,
         $playRingReminder = null,
         CriteriaActivation $criteriaActivation = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber);
        $this->setPlayRingReminder($playRingReminder);
        $this->setCriteriaActivation($criteriaActivation);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber = null)
    {
        $this->defaultForwardToPhoneNumber = ($defaultForwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $defaultForwardToPhoneNumber
             : new OutgoingDNorSIPURI($defaultForwardToPhoneNumber);
        $this->defaultForwardToPhoneNumber->setName('defaultForwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $defaultForwardToPhoneNumber
     */
    public function getDefaultForwardToPhoneNumber()
    {
        return ($this->defaultForwardToPhoneNumber) ? $this->defaultForwardToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayRingReminder($playRingReminder = null)
    {
        $this->playRingReminder = new PrimitiveType($playRingReminder);
        $this->playRingReminder->setName('playRingReminder');
        return $this;
    }

    /**
     * 
     * @return boolean $playRingReminder
     */
    public function getPlayRingReminder()
    {
        return ($this->playRingReminder) ? $this->playRingReminder->getValue() : null;
    }

    /**
     * 
     */
    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
        $this->criteriaActivation = ($criteriaActivation InstanceOf CriteriaActivation)
             ? $criteriaActivation
             : new CriteriaActivation($criteriaActivation);
        $this->criteriaActivation->setName('criteriaActivation');
        return $this;
    }

    /**
     * 
     * @return CriteriaActivation $criteriaActivation
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }
}