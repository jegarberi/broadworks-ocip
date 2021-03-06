<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost\HotelingHostAccessLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Hoteling Host.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserHotelingHostModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserHotelingHostModifyRequest';
    protected $userId;
    protected $isActive;
    protected $enforceAssociationLimit;
    protected $associationLimitHours;
    protected $accessLevel;
    protected $removeGuestAssociation;

    public function __construct(
         $userId = '',
         $isActive = null,
         $enforceAssociationLimit = null,
         $associationLimitHours = null,
         $accessLevel = null,
         $removeGuestAssociation = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setEnforceAssociationLimit($enforceAssociationLimit);
        $this->setAssociationLimitHours($associationLimitHours);
        $this->setAccessLevel($accessLevel);
        $this->setRemoveGuestAssociation($removeGuestAssociation);
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
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
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
    public function setEnforceAssociationLimit($enforceAssociationLimit = null)
    {
        $this->enforceAssociationLimit = new PrimitiveType($enforceAssociationLimit);
        $this->enforceAssociationLimit->setElementName('enforceAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceAssociationLimit
     */
    public function getEnforceAssociationLimit()
    {
        return ($this->enforceAssociationLimit)
            ? $this->enforceAssociationLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAssociationLimitHours($associationLimitHours = null)
    {
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
        $this->associationLimitHours->setElementName('associationLimitHours');
        return $this;
    }

    /**
     * 
     * @return HotelingAssociationLimitHours $associationLimitHours
     */
    public function getAssociationLimitHours()
    {
        return ($this->associationLimitHours)
            ? $this->associationLimitHours->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessLevel($accessLevel = null)
    {
        $this->accessLevel = ($accessLevel InstanceOf HotelingHostAccessLevel)
             ? $accessLevel
             : new HotelingHostAccessLevel($accessLevel);
        $this->accessLevel->setElementName('accessLevel');
        return $this;
    }

    /**
     * 
     * @return HotelingHostAccessLevel $accessLevel
     */
    public function getAccessLevel()
    {
        return ($this->accessLevel)
            ? $this->accessLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRemoveGuestAssociation($removeGuestAssociation = null)
    {
        $this->removeGuestAssociation = new PrimitiveType($removeGuestAssociation);
        $this->removeGuestAssociation->setElementName('removeGuestAssociation');
        return $this;
    }

    /**
     * 
     * @return boolean $removeGuestAssociation
     */
    public function getRemoveGuestAssociation()
    {
        return ($this->removeGuestAssociation)
            ? $this->removeGuestAssociation->getElementValue()
            : null;
    }
}
