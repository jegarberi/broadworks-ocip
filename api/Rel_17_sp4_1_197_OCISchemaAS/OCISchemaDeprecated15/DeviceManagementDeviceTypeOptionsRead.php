<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Device Management System device type options.
 */
class DeviceManagementDeviceTypeOptionsRead extends ComplexType implements ComplexInterface
{
    public    $name = 'DeviceManagementDeviceTypeOptionsRead';
    protected $deviceAccessProtocol;
    protected $tagMode;
    protected $tagSet;
    protected $allowDeviceProfileCustomTagSet;
    protected $allowGroupCustomTagSet;
    protected $sendEmailUponResetFailure;
    protected $deviceAccessNetAddress;
    protected $deviceAccessPort;
    protected $deviceAccessContext;
    protected $deviceAccessURI;
    protected $defaultDeviceLanguage;
    protected $defaultDeviceEncoding;
    protected $accessDeviceCredentials;
    protected $useHttpDigestAuthentication;
    protected $macBasedFileAuthentication;
    protected $userNamePasswordFileAuthentication;
    protected $macInNonRequestURI;
    protected $macFormatInNonRequestURI;

    public function __construct(
         $deviceAccessProtocol = '',
         $tagMode = '',
         $tagSet = null,
         $allowDeviceProfileCustomTagSet = '',
         $allowGroupCustomTagSet = '',
         $sendEmailUponResetFailure = '',
         $deviceAccessNetAddress = null,
         $deviceAccessPort = null,
         $deviceAccessContext = null,
         $deviceAccessURI = null,
         $defaultDeviceLanguage = null,
         $defaultDeviceEncoding = null,
         $accessDeviceCredentials = null,
         $useHttpDigestAuthentication = '',
         $macBasedFileAuthentication = '',
         $userNamePasswordFileAuthentication = '',
         $macInNonRequestURI = '',
         $macFormatInNonRequestURI = null
    ) {
        $this->setDeviceAccessProtocol($deviceAccessProtocol);
        $this->setTagMode($tagMode);
        $this->setTagSet($tagSet);
        $this->setAllowDeviceProfileCustomTagSet($allowDeviceProfileCustomTagSet);
        $this->setAllowGroupCustomTagSet($allowGroupCustomTagSet);
        $this->setSendEmailUponResetFailure($sendEmailUponResetFailure);
        $this->setDeviceAccessNetAddress($deviceAccessNetAddress);
        $this->setDeviceAccessPort($deviceAccessPort);
        $this->setDeviceAccessContext($deviceAccessContext);
        $this->setDeviceAccessURI($deviceAccessURI);
        $this->setDefaultDeviceLanguage($defaultDeviceLanguage);
        $this->setDefaultDeviceEncoding($defaultDeviceEncoding);
        $this->setAccessDeviceCredentials($accessDeviceCredentials);
        $this->setUseHttpDigestAuthentication($useHttpDigestAuthentication);
        $this->setMacBasedFileAuthentication($macBasedFileAuthentication);
        $this->setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication);
        $this->setMacInNonRequestURI($macInNonRequestURI);
        $this->setMacFormatInNonRequestURI($macFormatInNonRequestURI);
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
    public function setDeviceAccessProtocol($deviceAccessProtocol = null)
    {
        $this->deviceAccessProtocol = new SimpleContent($deviceAccessProtocol);
        $this->deviceAccessProtocol->setName('deviceAccessProtocol');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceAccessProtocol
     */
    public function getDeviceAccessProtocol()
    {
        return ($this->deviceAccessProtocol) ? $this->deviceAccessProtocol->getValue() : null;
    }

    /**
     * 
     */
    public function setTagMode($tagMode = null)
    {
        $this->tagMode = new SimpleContent($tagMode);
        $this->tagMode->setName('tagMode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $tagMode
     */
    public function getTagMode()
    {
        return ($this->tagMode) ? $this->tagMode->getValue() : null;
    }

    /**
     * 
     */
    public function setTagSet($tagSet = null)
    {
        $this->tagSet = new SimpleContent($tagSet);
        $this->tagSet->setName('tagSet');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $tagSet
     */
    public function getTagSet()
    {
        return ($this->tagSet) ? $this->tagSet->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowDeviceProfileCustomTagSet($allowDeviceProfileCustomTagSet = null)
    {
        $this->allowDeviceProfileCustomTagSet = new SimpleContent($allowDeviceProfileCustomTagSet);
        $this->allowDeviceProfileCustomTagSet->setName('allowDeviceProfileCustomTagSet');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowDeviceProfileCustomTagSet
     */
    public function getAllowDeviceProfileCustomTagSet()
    {
        return ($this->allowDeviceProfileCustomTagSet) ? $this->allowDeviceProfileCustomTagSet->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowGroupCustomTagSet($allowGroupCustomTagSet = null)
    {
        $this->allowGroupCustomTagSet = new SimpleContent($allowGroupCustomTagSet);
        $this->allowGroupCustomTagSet->setName('allowGroupCustomTagSet');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $allowGroupCustomTagSet
     */
    public function getAllowGroupCustomTagSet()
    {
        return ($this->allowGroupCustomTagSet) ? $this->allowGroupCustomTagSet->getValue() : null;
    }

    /**
     * 
     */
    public function setSendEmailUponResetFailure($sendEmailUponResetFailure = null)
    {
        $this->sendEmailUponResetFailure = new SimpleContent($sendEmailUponResetFailure);
        $this->sendEmailUponResetFailure->setName('sendEmailUponResetFailure');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $sendEmailUponResetFailure
     */
    public function getSendEmailUponResetFailure()
    {
        return ($this->sendEmailUponResetFailure) ? $this->sendEmailUponResetFailure->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceAccessNetAddress($deviceAccessNetAddress = null)
    {
        $this->deviceAccessNetAddress = new SimpleContent($deviceAccessNetAddress);
        $this->deviceAccessNetAddress->setName('deviceAccessNetAddress');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceAccessNetAddress
     */
    public function getDeviceAccessNetAddress()
    {
        return ($this->deviceAccessNetAddress) ? $this->deviceAccessNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceAccessPort($deviceAccessPort = null)
    {
        $this->deviceAccessPort = new SimpleContent($deviceAccessPort);
        $this->deviceAccessPort->setName('deviceAccessPort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceAccessPort
     */
    public function getDeviceAccessPort()
    {
        return ($this->deviceAccessPort) ? $this->deviceAccessPort->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceAccessContext($deviceAccessContext = null)
    {
        $this->deviceAccessContext = new SimpleContent($deviceAccessContext);
        $this->deviceAccessContext->setName('deviceAccessContext');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceAccessContext
     */
    public function getDeviceAccessContext()
    {
        return ($this->deviceAccessContext) ? $this->deviceAccessContext->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceAccessURI($deviceAccessURI = null)
    {
        $this->deviceAccessURI = new SimpleContent($deviceAccessURI);
        $this->deviceAccessURI->setName('deviceAccessURI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceAccessURI
     */
    public function getDeviceAccessURI()
    {
        return ($this->deviceAccessURI) ? $this->deviceAccessURI->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultDeviceLanguage($defaultDeviceLanguage = null)
    {
        $this->defaultDeviceLanguage = new SimpleContent($defaultDeviceLanguage);
        $this->defaultDeviceLanguage->setName('defaultDeviceLanguage');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $defaultDeviceLanguage
     */
    public function getDefaultDeviceLanguage()
    {
        return ($this->defaultDeviceLanguage) ? $this->defaultDeviceLanguage->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultDeviceEncoding($defaultDeviceEncoding = null)
    {
        $this->defaultDeviceEncoding = new SimpleContent($defaultDeviceEncoding);
        $this->defaultDeviceEncoding->setName('defaultDeviceEncoding');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $defaultDeviceEncoding
     */
    public function getDefaultDeviceEncoding()
    {
        return ($this->defaultDeviceEncoding) ? $this->defaultDeviceEncoding->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessDeviceCredentials($accessDeviceCredentials = null)
    {
        $this->accessDeviceCredentials = new SimpleContent($accessDeviceCredentials);
        $this->accessDeviceCredentials->setName('accessDeviceCredentials');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $accessDeviceCredentials
     */
    public function getAccessDeviceCredentials()
    {
        return ($this->accessDeviceCredentials) ? $this->accessDeviceCredentials->getValue() : null;
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        $this->useHttpDigestAuthentication = new SimpleContent($useHttpDigestAuthentication);
        $this->useHttpDigestAuthentication->setName('useHttpDigestAuthentication');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $useHttpDigestAuthentication
     */
    public function getUseHttpDigestAuthentication()
    {
        return ($this->useHttpDigestAuthentication) ? $this->useHttpDigestAuthentication->getValue() : null;
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        $this->macBasedFileAuthentication = new SimpleContent($macBasedFileAuthentication);
        $this->macBasedFileAuthentication->setName('macBasedFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $macBasedFileAuthentication
     */
    public function getMacBasedFileAuthentication()
    {
        return ($this->macBasedFileAuthentication) ? $this->macBasedFileAuthentication->getValue() : null;
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        $this->userNamePasswordFileAuthentication = new SimpleContent($userNamePasswordFileAuthentication);
        $this->userNamePasswordFileAuthentication->setName('userNamePasswordFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userNamePasswordFileAuthentication
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return ($this->userNamePasswordFileAuthentication) ? $this->userNamePasswordFileAuthentication->getValue() : null;
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        $this->macInNonRequestURI = new SimpleContent($macInNonRequestURI);
        $this->macInNonRequestURI->setName('macInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $macInNonRequestURI
     */
    public function getMacInNonRequestURI()
    {
        return ($this->macInNonRequestURI) ? $this->macInNonRequestURI->getValue() : null;
    }

    /**
     * 
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        $this->macFormatInNonRequestURI = new SimpleContent($macFormatInNonRequestURI);
        $this->macFormatInNonRequestURI->setName('macFormatInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $macFormatInNonRequestURI
     */
    public function getMacFormatInNonRequestURI()
    {
        return ($this->macFormatInNonRequestURI) ? $this->macFormatInNonRequestURI->getValue() : null;
    }
}