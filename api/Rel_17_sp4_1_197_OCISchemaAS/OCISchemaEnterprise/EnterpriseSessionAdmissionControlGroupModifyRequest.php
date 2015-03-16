<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\ReplacementEnterpriseDeviceList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAdmissionControlGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a session admission control group for the enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseSessionAdmissionControlGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseSessionAdmissionControlGroupModifyRequest';
    protected $serviceProviderId;
    protected $name;
    protected $newName;
    protected $maxSession;
    protected $maxUserOriginatingSessions;
    protected $maxUserTerminatingSessions;
    protected $reservedSession;
    protected $reservedUserOriginatingSessions;
    protected $reservedUserTerminatingSessions;
    protected $becomeDefaultGroup;
    protected $countIntraSACGroupSessions;
    protected $deviceList;

    public function __construct(
         $serviceProviderId = '',
         $name = '',
         $newName = null,
         $maxSession = null,
         $maxUserOriginatingSessions = null,
         $maxUserTerminatingSessions = null,
         $reservedSession = null,
         $reservedUserOriginatingSessions = null,
         $reservedUserTerminatingSessions = null,
         $becomeDefaultGroup = null,
         $countIntraSACGroupSessions = null,
         ReplacementEnterpriseDeviceList $deviceList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setMaxSession($maxSession);
        $this->setMaxUserOriginatingSessions($maxUserOriginatingSessions);
        $this->setMaxUserTerminatingSessions($maxUserTerminatingSessions);
        $this->setReservedSession($reservedSession);
        $this->setReservedUserOriginatingSessions($reservedUserOriginatingSessions);
        $this->setReservedUserTerminatingSessions($reservedUserTerminatingSessions);
        $this->setBecomeDefaultGroup($becomeDefaultGroup);
        $this->setCountIntraSACGroupSessions($countIntraSACGroupSessions);
        $this->setDeviceList($deviceList);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf SessionAdmissionControlGroupName)
             ? $name
             : new SessionAdmissionControlGroupName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SessionAdmissionControlGroupName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf SessionAdmissionControlGroupName)
             ? $newName
             : new SessionAdmissionControlGroupName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return SessionAdmissionControlGroupName $newName
     */
    public function getNewName()
    {
        return ($this->newName) ? $this->newName->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxSession($maxSession = null)
    {
        $this->maxSession = ($maxSession InstanceOf NonNegativeInt)
             ? $maxSession
             : new NonNegativeInt($maxSession);
        $this->maxSession->setName('maxSession');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxSession
     */
    public function getMaxSession()
    {
        return ($this->maxSession) ? $this->maxSession->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserOriginatingSessions->setName('maxUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserOriginatingSessions
     */
    public function getMaxUserOriginatingSessions()
    {
        return ($this->maxUserOriginatingSessions) ? $this->maxUserOriginatingSessions->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
        $this->maxUserTerminatingSessions->setName('maxUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserTerminatingSessions
     */
    public function getMaxUserTerminatingSessions()
    {
        return ($this->maxUserTerminatingSessions) ? $this->maxUserTerminatingSessions->getValue() : null;
    }

    /**
     * 
     */
    public function setReservedSession($reservedSession = null)
    {
        $this->reservedSession = ($reservedSession InstanceOf NonNegativeInt)
             ? $reservedSession
             : new NonNegativeInt($reservedSession);
        $this->reservedSession->setName('reservedSession');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $reservedSession
     */
    public function getReservedSession()
    {
        return ($this->reservedSession) ? $this->reservedSession->getValue() : null;
    }

    /**
     * 
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions = null)
    {
        $this->reservedUserOriginatingSessions = ($reservedUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserOriginatingSessions
             : new NonNegativeInt($reservedUserOriginatingSessions);
        $this->reservedUserOriginatingSessions->setName('reservedUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $reservedUserOriginatingSessions
     */
    public function getReservedUserOriginatingSessions()
    {
        return ($this->reservedUserOriginatingSessions) ? $this->reservedUserOriginatingSessions->getValue() : null;
    }

    /**
     * 
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions = null)
    {
        $this->reservedUserTerminatingSessions = ($reservedUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserTerminatingSessions
             : new NonNegativeInt($reservedUserTerminatingSessions);
        $this->reservedUserTerminatingSessions->setName('reservedUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $reservedUserTerminatingSessions
     */
    public function getReservedUserTerminatingSessions()
    {
        return ($this->reservedUserTerminatingSessions) ? $this->reservedUserTerminatingSessions->getValue() : null;
    }

    /**
     * 
     */
    public function setBecomeDefaultGroup($becomeDefaultGroup = null)
    {
        $this->becomeDefaultGroup = new PrimitiveType($becomeDefaultGroup);
        $this->becomeDefaultGroup->setName('becomeDefaultGroup');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefaultGroup
     */
    public function getBecomeDefaultGroup()
    {
        return ($this->becomeDefaultGroup) ? $this->becomeDefaultGroup->getValue() : null;
    }

    /**
     * 
     */
    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions = null)
    {
        $this->countIntraSACGroupSessions = new PrimitiveType($countIntraSACGroupSessions);
        $this->countIntraSACGroupSessions->setName('countIntraSACGroupSessions');
        return $this;
    }

    /**
     * 
     * @return boolean $countIntraSACGroupSessions
     */
    public function getCountIntraSACGroupSessions()
    {
        return ($this->countIntraSACGroupSessions) ? $this->countIntraSACGroupSessions->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceList(ReplacementEnterpriseDeviceList $deviceList = null)
    {
        $this->deviceList = ($deviceList InstanceOf ReplacementEnterpriseDeviceList)
             ? $deviceList
             : new ReplacementEnterpriseDeviceList($deviceList);
        $this->deviceList->setName('deviceList');
        return $this;
    }

    /**
     * 
     * @return ReplacementEnterpriseDeviceList $deviceList
     */
    public function getDeviceList()
    {
        return $this->deviceList;
    }
}