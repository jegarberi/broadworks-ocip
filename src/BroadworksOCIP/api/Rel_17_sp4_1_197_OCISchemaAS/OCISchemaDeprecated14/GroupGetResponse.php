<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingLineIdName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZoneDisplayName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupUserLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeZone;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupGetRequest.
 *         The response contains the group's profile information.
 *         Replaced By: GroupGetResponse14sp7
 */
class GroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupGetResponse';
    protected $defaultDomain;
    protected $userLimit;
    protected $userCount;
    protected $groupName;
    protected $callingLineIdName;
    protected $timeZone;
    protected $timeZoneDisplayName;
    protected $locationDialingCode;
    protected $contact;
    protected $address;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
        $this->defaultDomain->setElementName('defaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $defaultDomain
     */
    public function getDefaultDomain()
    {
        return ($this->defaultDomain)
            ? $this->defaultDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserLimit($userLimit = null)
    {
        $this->userLimit = ($userLimit InstanceOf GroupUserLimit)
             ? $userLimit
             : new GroupUserLimit($userLimit);
        $this->userLimit->setElementName('userLimit');
        return $this;
    }

    /**
     * 
     * @return GroupUserLimit $userLimit
     */
    public function getUserLimit()
    {
        return ($this->userLimit)
            ? $this->userLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserCount($userCount = null)
    {
        $this->userCount = new PrimitiveType($userCount);
        $this->userCount->setElementName('userCount');
        return $this;
    }

    /**
     * 
     * @return int $userCount
     */
    public function getUserCount()
    {
        return ($this->userCount)
            ? $this->userCount->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupName($groupName = null)
    {
        $this->groupName = ($groupName InstanceOf GroupName)
             ? $groupName
             : new GroupName($groupName);
        $this->groupName->setElementName('groupName');
        return $this;
    }

    /**
     * 
     * @return GroupName $groupName
     */
    public function getGroupName()
    {
        return ($this->groupName)
            ? $this->groupName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingLineIdName($callingLineIdName = null)
    {
        $this->callingLineIdName = ($callingLineIdName InstanceOf GroupCallingLineIdName)
             ? $callingLineIdName
             : new GroupCallingLineIdName($callingLineIdName);
        $this->callingLineIdName->setElementName('callingLineIdName');
        return $this;
    }

    /**
     * 
     * @return GroupCallingLineIdName $callingLineIdName
     */
    public function getCallingLineIdName()
    {
        return ($this->callingLineIdName)
            ? $this->callingLineIdName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeZone($timeZone = null)
    {
        $this->timeZone = ($timeZone InstanceOf TimeZone)
             ? $timeZone
             : new TimeZone($timeZone);
        $this->timeZone->setElementName('timeZone');
        return $this;
    }

    /**
     * 
     * @return TimeZone $timeZone
     */
    public function getTimeZone()
    {
        return ($this->timeZone)
            ? $this->timeZone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName = null)
    {
        $this->timeZoneDisplayName = ($timeZoneDisplayName InstanceOf TimeZoneDisplayName)
             ? $timeZoneDisplayName
             : new TimeZoneDisplayName($timeZoneDisplayName);
        $this->timeZoneDisplayName->setElementName('timeZoneDisplayName');
        return $this;
    }

    /**
     * 
     * @return TimeZoneDisplayName $timeZoneDisplayName
     */
    public function getTimeZoneDisplayName()
    {
        return ($this->timeZoneDisplayName)
            ? $this->timeZoneDisplayName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLocationDialingCode($locationDialingCode = null)
    {
        $this->locationDialingCode = ($locationDialingCode InstanceOf LocationDialingCode)
             ? $locationDialingCode
             : new LocationDialingCode($locationDialingCode);
        $this->locationDialingCode->setElementName('locationDialingCode');
        return $this;
    }

    /**
     * 
     * @return LocationDialingCode $locationDialingCode
     */
    public function getLocationDialingCode()
    {
        return ($this->locationDialingCode)
            ? $this->locationDialingCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContact(Contact $contact = null)
    {
        $this->contact = ($contact InstanceOf Contact)
             ? $contact
             : new Contact($contact);
        $this->contact->setElementName('contact');
        return $this;
    }

    /**
     * 
     * @return Contact $contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * 
     */
    public function setAddress(StreetAddress $address = null)
    {
        $this->address = ($address InstanceOf StreetAddress)
             ? $address
             : new StreetAddress($address);
        $this->address->setElementName('address');
        return $this;
    }

    /**
     * 
     * @return StreetAddress $address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
