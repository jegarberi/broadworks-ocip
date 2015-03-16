<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoicePortalExternalRoutingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupVoiceMessagingGroupGetVoicePortalRequest14.
 *         Replaced by GroupVoiceMessagingGroupGetVoicePortalResponse15
 */
class GroupVoiceMessagingGroupGetVoicePortalResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupVoiceMessagingGroupGetVoicePortalResponse14';
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $isActive;
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
    protected $useVoicePortalWizard;
    protected $voicePortalExternalRoutingScope;
    protected $useExternalRouting;
    protected $externalRoutingAddress;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupVoiceMessagingGroupGetVoicePortalResponse14 $response
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
    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null)
    {
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = new PrimitiveType($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin);
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->setName('allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     */
    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return ($this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin) ? $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->getValue() : null;
    }

    /**
     * 
     */
    public function setUseVoicePortalWizard($useVoicePortalWizard = null)
    {
        $this->useVoicePortalWizard = new PrimitiveType($useVoicePortalWizard);
        $this->useVoicePortalWizard->setName('useVoicePortalWizard');
        return $this;
    }

    /**
     * 
     * @return boolean $useVoicePortalWizard
     */
    public function getUseVoicePortalWizard()
    {
        return ($this->useVoicePortalWizard) ? $this->useVoicePortalWizard->getValue() : null;
    }

    /**
     * 
     */
    public function setVoicePortalExternalRoutingScope($voicePortalExternalRoutingScope = null)
    {
        $this->voicePortalExternalRoutingScope = ($voicePortalExternalRoutingScope InstanceOf VoicePortalExternalRoutingScope)
             ? $voicePortalExternalRoutingScope
             : new VoicePortalExternalRoutingScope($voicePortalExternalRoutingScope);
        $this->voicePortalExternalRoutingScope->setName('voicePortalExternalRoutingScope');
        return $this;
    }

    /**
     * 
     * @return VoicePortalExternalRoutingScope $voicePortalExternalRoutingScope
     */
    public function getVoicePortalExternalRoutingScope()
    {
        return ($this->voicePortalExternalRoutingScope) ? $this->voicePortalExternalRoutingScope->getValue() : null;
    }

    /**
     * 
     */
    public function setUseExternalRouting($useExternalRouting = null)
    {
        $this->useExternalRouting = new PrimitiveType($useExternalRouting);
        $this->useExternalRouting->setName('useExternalRouting');
        return $this;
    }

    /**
     * 
     * @return boolean $useExternalRouting
     */
    public function getUseExternalRouting()
    {
        return ($this->useExternalRouting) ? $this->useExternalRouting->getValue() : null;
    }

    /**
     * 
     */
    public function setExternalRoutingAddress($externalRoutingAddress = null)
    {
        $this->externalRoutingAddress = ($externalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $externalRoutingAddress
             : new OutgoingDNorSIPURI($externalRoutingAddress);
        $this->externalRoutingAddress->setName('externalRoutingAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $externalRoutingAddress
     */
    public function getExternalRoutingAddress()
    {
        return ($this->externalRoutingAddress) ? $this->externalRoutingAddress->getValue() : null;
    }
}