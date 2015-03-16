<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Service Profile Information for group service.
 *         It is identical to the ServiceInstanceAddProfile, but without the password.
 *         Prior to release 14 this was called ServiceInstanceProfile.
 */
class ServiceInstanceReadProfile extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceInstanceReadProfile';
    protected $name;
    protected $callingLineIdLastName;
    protected $callingLineIdFirstName;
    protected $hiraganaLastName;
    protected $hiraganaFirstName;
    protected $phoneNumber;
    protected $extension;
    protected $department;
    protected $language;
    protected $timeZone;
    protected $timeZoneDisplayName;
    protected $alias;
    protected $publicUserIdentity;

    public function __construct(
         $name = '',
         $callingLineIdLastName = '',
         $callingLineIdFirstName = '',
         $hiraganaLastName = null,
         $hiraganaFirstName = null,
         $phoneNumber = null,
         $extension = null,
         $department = null,
         $language = null,
         $timeZone = null,
         $timeZoneDisplayName = null,
         $alias = null,
         $publicUserIdentity = null
    ) {
        $this->setName($name);
        $this->setCallingLineIdLastName($callingLineIdLastName);
        $this->setCallingLineIdFirstName($callingLineIdFirstName);
        $this->setHiraganaLastName($hiraganaLastName);
        $this->setHiraganaFirstName($hiraganaFirstName);
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setDepartment($department);
        $this->setLanguage($language);
        $this->setTimeZone($timeZone);
        $this->setTimeZoneDisplayName($timeZoneDisplayName);
        $this->setAlias($alias);
        $this->setPublicUserIdentity($publicUserIdentity);
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
    public function setName($name = null)
    {
        $this->name = new SimpleContent($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdLastName($callingLineIdLastName = null)
    {
        $this->callingLineIdLastName = new SimpleContent($callingLineIdLastName);
        $this->callingLineIdLastName->setName('callingLineIdLastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdLastName
     */
    public function getCallingLineIdLastName()
    {
        return ($this->callingLineIdLastName) ? $this->callingLineIdLastName->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdFirstName($callingLineIdFirstName = null)
    {
        $this->callingLineIdFirstName = new SimpleContent($callingLineIdFirstName);
        $this->callingLineIdFirstName->setName('callingLineIdFirstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callingLineIdFirstName
     */
    public function getCallingLineIdFirstName()
    {
        return ($this->callingLineIdFirstName) ? $this->callingLineIdFirstName->getValue() : null;
    }

    /**
     * 
     */
    public function setHiraganaLastName($hiraganaLastName = null)
    {
        $this->hiraganaLastName = new SimpleContent($hiraganaLastName);
        $this->hiraganaLastName->setName('hiraganaLastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hiraganaLastName
     */
    public function getHiraganaLastName()
    {
        return ($this->hiraganaLastName) ? $this->hiraganaLastName->getValue() : null;
    }

    /**
     * 
     */
    public function setHiraganaFirstName($hiraganaFirstName = null)
    {
        $this->hiraganaFirstName = new SimpleContent($hiraganaFirstName);
        $this->hiraganaFirstName->setName('hiraganaFirstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hiraganaFirstName
     */
    public function getHiraganaFirstName()
    {
        return ($this->hiraganaFirstName) ? $this->hiraganaFirstName->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        $this->extension = new SimpleContent($extension);
        $this->extension->setName('extension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $extension
     */
    public function getExtension()
    {
        return ($this->extension) ? $this->extension->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartment($department = null)
    {
        $this->department = new SimpleContent($department);
        $this->department->setName('department');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $department
     */
    public function getDepartment()
    {
        return ($this->department) ? $this->department->getValue() : null;
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        $this->language = new SimpleContent($language);
        $this->language->setName('language');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $language
     */
    public function getLanguage()
    {
        return ($this->language) ? $this->language->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeZone($timeZone = null)
    {
        $this->timeZone = new SimpleContent($timeZone);
        $this->timeZone->setName('timeZone');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeZone
     */
    public function getTimeZone()
    {
        return ($this->timeZone) ? $this->timeZone->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName = null)
    {
        $this->timeZoneDisplayName = new SimpleContent($timeZoneDisplayName);
        $this->timeZoneDisplayName->setName('timeZoneDisplayName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeZoneDisplayName
     */
    public function getTimeZoneDisplayName()
    {
        return ($this->timeZoneDisplayName) ? $this->timeZoneDisplayName->getValue() : null;
    }

    /**
     * 
     */
    public function setAlias($alias = null)
    {
        $this->alias = new SimpleContent($alias);
        $this->alias->setName('alias');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $alias
     */
    public function getAlias()
    {
        return ($this->alias) ? $this->alias->getValue() : null;
    }

    /**
     * 
     */
    public function setPublicUserIdentity($publicUserIdentity = null)
    {
        $this->publicUserIdentity = new SimpleContent($publicUserIdentity);
        $this->publicUserIdentity->setName('publicUserIdentity');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $publicUserIdentity
     */
    public function getPublicUserIdentity()
    {
        return ($this->publicUserIdentity) ? $this->publicUserIdentity->getValue() : null;
    }
}