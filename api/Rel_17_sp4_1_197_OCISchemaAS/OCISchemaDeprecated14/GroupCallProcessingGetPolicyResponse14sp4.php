<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallProcessingMaxCallTimeForAnsweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkUsageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupCallProcessingGetPolicyRequest14sp4.
 *         Replaced By : GroupCallProcessingGetPolicyResponse15
 */
class GroupCallProcessingGetPolicyResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallProcessingGetPolicyResponse14sp4';
    protected $useGroupSetting;
    protected $useMaxSimultaneousCalls;
    protected $maxSimultaneousCalls;
    protected $useMaxSimultaneousVideoCalls;
    protected $maxSimultaneousVideoCalls;
    protected $useMaxCallTimeForAnsweredCalls;
    protected $maxCallTimeForAnsweredCallsMinutes;
    protected $useMaxCallTimeForUnansweredCalls;
    protected $maxCallTimeForUnansweredCallsMinutes;
    protected $mediaPolicySelection;
    protected $supportedMediaSetName;
    protected $networkUsageSelection;
    protected $enforceGroupCallingLineIdentityRestriction;
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan;
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan;
    protected $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan;
    protected $enableEnterpriseExtensionDialing;
    protected $useMaxConcurrentRedirectedCalls;
    protected $maxConcurrentRedirectedCalls;
    protected $useMaxFindMeFollowMeDepth;
    protected $maxFindMeFollowMeDepth;
    protected $maxRedirectionDepth;
    protected $useMaxConcurrentFindMeFollowMeInvocations;
    protected $maxConcurrentFindMeFollowMeInvocations;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupCallProcessingGetPolicyResponse14sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseGroupSetting($useGroupSetting = null)
    {
        $this->useGroupSetting = new PrimitiveType($useGroupSetting);
        $this->useGroupSetting->setName('useGroupSetting');
        return $this;
    }

    /**
     * 
     * @return boolean $useGroupSetting
     */
    public function getUseGroupSetting()
    {
        return ($this->useGroupSetting) ? $this->useGroupSetting->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls = null)
    {
        $this->useMaxSimultaneousCalls = new PrimitiveType($useMaxSimultaneousCalls);
        $this->useMaxSimultaneousCalls->setName('useMaxSimultaneousCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxSimultaneousCalls
     */
    public function getUseMaxSimultaneousCalls()
    {
        return ($this->useMaxSimultaneousCalls) ? $this->useMaxSimultaneousCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls = null)
    {
        $this->maxSimultaneousCalls = ($maxSimultaneousCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
        $this->maxSimultaneousCalls->setName('maxSimultaneousCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxSimultaneousCalls $maxSimultaneousCalls
     */
    public function getMaxSimultaneousCalls()
    {
        return ($this->maxSimultaneousCalls) ? $this->maxSimultaneousCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls = null)
    {
        $this->useMaxSimultaneousVideoCalls = new PrimitiveType($useMaxSimultaneousVideoCalls);
        $this->useMaxSimultaneousVideoCalls->setName('useMaxSimultaneousVideoCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxSimultaneousVideoCalls
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return ($this->useMaxSimultaneousVideoCalls) ? $this->useMaxSimultaneousVideoCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls = null)
    {
        $this->maxSimultaneousVideoCalls = ($maxSimultaneousVideoCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousVideoCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
        $this->maxSimultaneousVideoCalls->setName('maxSimultaneousVideoCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxSimultaneousCalls $maxSimultaneousVideoCalls
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return ($this->maxSimultaneousVideoCalls) ? $this->maxSimultaneousVideoCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls = null)
    {
        $this->useMaxCallTimeForAnsweredCalls = new PrimitiveType($useMaxCallTimeForAnsweredCalls);
        $this->useMaxCallTimeForAnsweredCalls->setName('useMaxCallTimeForAnsweredCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxCallTimeForAnsweredCalls
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return ($this->useMaxCallTimeForAnsweredCalls) ? $this->useMaxCallTimeForAnsweredCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes = null)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes);
        $this->maxCallTimeForAnsweredCallsMinutes->setName('maxCallTimeForAnsweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForAnsweredCallsMinutes $maxCallTimeForAnsweredCallsMinutes
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return ($this->maxCallTimeForAnsweredCallsMinutes) ? $this->maxCallTimeForAnsweredCallsMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls = null)
    {
        $this->useMaxCallTimeForUnansweredCalls = new PrimitiveType($useMaxCallTimeForUnansweredCalls);
        $this->useMaxCallTimeForUnansweredCalls->setName('useMaxCallTimeForUnansweredCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxCallTimeForUnansweredCalls
     */
    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return ($this->useMaxCallTimeForUnansweredCalls) ? $this->useMaxCallTimeForUnansweredCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes = null)
    {
        $this->maxCallTimeForUnansweredCallsMinutes = ($maxCallTimeForUnansweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForUnansweredCallsMinutes)
             ? $maxCallTimeForUnansweredCallsMinutes
             : new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
        $this->maxCallTimeForUnansweredCallsMinutes->setName('maxCallTimeForUnansweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForUnansweredCallsMinutes $maxCallTimeForUnansweredCallsMinutes
     */
    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return ($this->maxCallTimeForUnansweredCallsMinutes) ? $this->maxCallTimeForUnansweredCallsMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setMediaPolicySelection($mediaPolicySelection = null)
    {
        $this->mediaPolicySelection = ($mediaPolicySelection InstanceOf MediaPolicySelection)
             ? $mediaPolicySelection
             : new MediaPolicySelection($mediaPolicySelection);
        $this->mediaPolicySelection->setName('mediaPolicySelection');
        return $this;
    }

    /**
     * 
     * @return MediaPolicySelection $mediaPolicySelection
     */
    public function getMediaPolicySelection()
    {
        return ($this->mediaPolicySelection) ? $this->mediaPolicySelection->getValue() : null;
    }

    /**
     * 
     */
    public function setSupportedMediaSetName($supportedMediaSetName = null)
    {
        $this->supportedMediaSetName = ($supportedMediaSetName InstanceOf MediaSetName)
             ? $supportedMediaSetName
             : new MediaSetName($supportedMediaSetName);
        $this->supportedMediaSetName->setName('supportedMediaSetName');
        return $this;
    }

    /**
     * 
     * @return MediaSetName $supportedMediaSetName
     */
    public function getSupportedMediaSetName()
    {
        return ($this->supportedMediaSetName) ? $this->supportedMediaSetName->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkUsageSelection($networkUsageSelection = null)
    {
        $this->networkUsageSelection = ($networkUsageSelection InstanceOf NetworkUsageSelection)
             ? $networkUsageSelection
             : new NetworkUsageSelection($networkUsageSelection);
        $this->networkUsageSelection->setName('networkUsageSelection');
        return $this;
    }

    /**
     * 
     * @return NetworkUsageSelection $networkUsageSelection
     */
    public function getNetworkUsageSelection()
    {
        return ($this->networkUsageSelection) ? $this->networkUsageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction = null)
    {
        $this->enforceGroupCallingLineIdentityRestriction = new PrimitiveType($enforceGroupCallingLineIdentityRestriction);
        $this->enforceGroupCallingLineIdentityRestriction->setName('enforceGroupCallingLineIdentityRestriction');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceGroupCallingLineIdentityRestriction
     */
    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return ($this->enforceGroupCallingLineIdentityRestriction) ? $this->enforceGroupCallingLineIdentityRestriction->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan = null)
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = new PrimitiveType($allowEnterpriseGroupCallTypingForPrivateDialingPlan);
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->setName('allowEnterpriseGroupCallTypingForPrivateDialingPlan');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEnterpriseGroupCallTypingForPrivateDialingPlan
     */
    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return ($this->allowEnterpriseGroupCallTypingForPrivateDialingPlan) ? $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan = null)
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = new PrimitiveType($allowEnterpriseGroupCallTypingForPublicDialingPlan);
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->setName('allowEnterpriseGroupCallTypingForPublicDialingPlan');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEnterpriseGroupCallTypingForPublicDialingPlan
     */
    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return ($this->allowEnterpriseGroupCallTypingForPublicDialingPlan) ? $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->getValue() : null;
    }

    /**
     * 
     */
    public function setOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan($overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = null)
    {
        $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = new PrimitiveType($overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan);
        $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan->setName('overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan
     */
    public function getOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan()
    {
        return ($this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan) ? $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing = null)
    {
        $this->enableEnterpriseExtensionDialing = new PrimitiveType($enableEnterpriseExtensionDialing);
        $this->enableEnterpriseExtensionDialing->setName('enableEnterpriseExtensionDialing');
        return $this;
    }

    /**
     * 
     * @return boolean $enableEnterpriseExtensionDialing
     */
    public function getEnableEnterpriseExtensionDialing()
    {
        return ($this->enableEnterpriseExtensionDialing) ? $this->enableEnterpriseExtensionDialing->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls = null)
    {
        $this->useMaxConcurrentRedirectedCalls = new PrimitiveType($useMaxConcurrentRedirectedCalls);
        $this->useMaxConcurrentRedirectedCalls->setName('useMaxConcurrentRedirectedCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxConcurrentRedirectedCalls
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return ($this->useMaxConcurrentRedirectedCalls) ? $this->useMaxConcurrentRedirectedCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls = null)
    {
        $this->maxConcurrentRedirectedCalls = ($maxConcurrentRedirectedCalls InstanceOf CallProcessingMaxConcurrentRedirectedCalls)
             ? $maxConcurrentRedirectedCalls
             : new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
        $this->maxConcurrentRedirectedCalls->setName('maxConcurrentRedirectedCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConcurrentRedirectedCalls $maxConcurrentRedirectedCalls
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return ($this->maxConcurrentRedirectedCalls) ? $this->maxConcurrentRedirectedCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth = null)
    {
        $this->useMaxFindMeFollowMeDepth = new PrimitiveType($useMaxFindMeFollowMeDepth);
        $this->useMaxFindMeFollowMeDepth->setName('useMaxFindMeFollowMeDepth');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxFindMeFollowMeDepth
     */
    public function getUseMaxFindMeFollowMeDepth()
    {
        return ($this->useMaxFindMeFollowMeDepth) ? $this->useMaxFindMeFollowMeDepth->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth = null)
    {
        $this->maxFindMeFollowMeDepth = ($maxFindMeFollowMeDepth InstanceOf CallProcessingMaxFindMeFollowMeDepth)
             ? $maxFindMeFollowMeDepth
             : new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
        $this->maxFindMeFollowMeDepth->setName('maxFindMeFollowMeDepth');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxFindMeFollowMeDepth $maxFindMeFollowMeDepth
     */
    public function getMaxFindMeFollowMeDepth()
    {
        return ($this->maxFindMeFollowMeDepth) ? $this->maxFindMeFollowMeDepth->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth = null)
    {
        $this->maxRedirectionDepth = ($maxRedirectionDepth InstanceOf CallProcessingMaxRedirectionDepth)
             ? $maxRedirectionDepth
             : new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
        $this->maxRedirectionDepth->setName('maxRedirectionDepth');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxRedirectionDepth $maxRedirectionDepth
     */
    public function getMaxRedirectionDepth()
    {
        return ($this->maxRedirectionDepth) ? $this->maxRedirectionDepth->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations = null)
    {
        $this->useMaxConcurrentFindMeFollowMeInvocations = new PrimitiveType($useMaxConcurrentFindMeFollowMeInvocations);
        $this->useMaxConcurrentFindMeFollowMeInvocations->setName('useMaxConcurrentFindMeFollowMeInvocations');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxConcurrentFindMeFollowMeInvocations
     */
    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return ($this->useMaxConcurrentFindMeFollowMeInvocations) ? $this->useMaxConcurrentFindMeFollowMeInvocations->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations = null)
    {
        $this->maxConcurrentFindMeFollowMeInvocations = ($maxConcurrentFindMeFollowMeInvocations InstanceOf CallProcessingMaxConcurrentFindMeFollowMeInvocations)
             ? $maxConcurrentFindMeFollowMeInvocations
             : new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
        $this->maxConcurrentFindMeFollowMeInvocations->setName('maxConcurrentFindMeFollowMeInvocations');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConcurrentFindMeFollowMeInvocations $maxConcurrentFindMeFollowMeInvocations
     */
    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return ($this->maxConcurrentFindMeFollowMeInvocations) ? $this->maxConcurrentFindMeFollowMeInvocations->getValue() : null;
    }
}