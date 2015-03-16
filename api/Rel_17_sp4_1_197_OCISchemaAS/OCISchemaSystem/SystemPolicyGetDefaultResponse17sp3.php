<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCommunicationBarringAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDialableCallerIDAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDialableCallerIDAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserCallLogAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemPolicyGetDefaultRequest17sp3.
 *         Contains the default policy settings for the system.
 *         The following elements are only used in AS data mode:
 *         		GroupAdminDialableCallerIDAccess
 *         		ServiceProviderAdminDialableCallerIDAccess
 *         The following elements are only used in HSS data mode:
 * 	      		serviceProviderAdminCommunicationBarringAccess
 */
class SystemPolicyGetDefaultResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemPolicyGetDefaultResponse17sp3';
    protected $groupCallingPlanAccess;
    protected $groupExtensionAccess;
    protected $groupLDAPIntegrationAccess;
    protected $groupVoiceMessagingAccess;
    protected $groupDepartmentAdminUserAccess;
    protected $groupDepartmentAdminTrunkGroupAccess;
    protected $groupDepartmentAdminPhoneNumberExtensionAccess;
    protected $groupDepartmentAdminCallingLineIdNumberAccess;
    protected $groupUserAuthenticationAccess;
    protected $groupUserGroupDirectoryAccess;
    protected $groupUserProfileAccess;
    protected $groupUserEnhancedCallLogsAccess;
    protected $groupAdminProfileAccess;
    protected $groupAdminUserAccess;
    protected $groupAdminAdminAccess;
    protected $groupAdminDepartmentAccess;
    protected $groupAdminAccessDeviceAccess;
    protected $groupAdminEnhancedServiceInstanceAccess;
    protected $groupAdminFeatureAccessCodeAccess;
    protected $groupAdminPhoneNumberExtensionAccess;
    protected $groupAdminCallingLineIdNumberAccess;
    protected $groupAdminServiceAccess;
    protected $groupAdminTrunkGroupAccess;
    protected $groupAdminSessionAdmissionControlAccess;
    protected $groupAdminOfficeZoneAccess;
    protected $groupAdminDialableCallerIDAccess;
    protected $serviceProviderAdminProfileAccess;
    protected $serviceProviderAdminGroupAccess;
    protected $serviceProviderAdminUserAccess;
    protected $serviceProviderAdminAdminAccess;
    protected $serviceProviderAdminDepartmentAccess;
    protected $serviceProviderAdminAccessDeviceAccess;
    protected $serviceProviderAdminPhoneNumberExtensionAccess;
    protected $serviceProviderAdminCallingLineIdNumberAccess;
    protected $serviceProviderAdminServiceAccess;
    protected $serviceProviderAdminServicePackAccess;
    protected $serviceProviderAdminSessionAdmissionControlAccess;
    protected $serviceProviderAdminWebBrandingAccess;
    protected $serviceProviderAdminOfficeZoneAccess;
    protected $serviceProviderAdminCommunicationBarringAccess;
    protected $enterpriseAdminNetworkPolicyAccess;
    protected $serviceProviderAdminDialableCallerIDAccess;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemPolicyGetDefaultResponse17sp3 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupCallingPlanAccess($groupCallingPlanAccess = null)
    {
        $this->groupCallingPlanAccess = ($groupCallingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $groupCallingPlanAccess
             : new GroupCallingPlanAccess($groupCallingPlanAccess);
        $this->groupCallingPlanAccess->setName('groupCallingPlanAccess');
        return $this;
    }

    /**
     * 
     * @return GroupCallingPlanAccess $groupCallingPlanAccess
     */
    public function getGroupCallingPlanAccess()
    {
        return ($this->groupCallingPlanAccess) ? $this->groupCallingPlanAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupExtensionAccess($groupExtensionAccess = null)
    {
        $this->groupExtensionAccess = ($groupExtensionAccess InstanceOf GroupExtensionAccess)
             ? $groupExtensionAccess
             : new GroupExtensionAccess($groupExtensionAccess);
        $this->groupExtensionAccess->setName('groupExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupExtensionAccess $groupExtensionAccess
     */
    public function getGroupExtensionAccess()
    {
        return ($this->groupExtensionAccess) ? $this->groupExtensionAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupLDAPIntegrationAccess($groupLDAPIntegrationAccess = null)
    {
        $this->groupLDAPIntegrationAccess = ($groupLDAPIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $groupLDAPIntegrationAccess
             : new GroupLDAPIntegrationAccess($groupLDAPIntegrationAccess);
        $this->groupLDAPIntegrationAccess->setName('groupLDAPIntegrationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupLDAPIntegrationAccess $groupLDAPIntegrationAccess
     */
    public function getGroupLDAPIntegrationAccess()
    {
        return ($this->groupLDAPIntegrationAccess) ? $this->groupLDAPIntegrationAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupVoiceMessagingAccess($groupVoiceMessagingAccess = null)
    {
        $this->groupVoiceMessagingAccess = ($groupVoiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $groupVoiceMessagingAccess
             : new GroupVoiceMessagingAccess($groupVoiceMessagingAccess);
        $this->groupVoiceMessagingAccess->setName('groupVoiceMessagingAccess');
        return $this;
    }

    /**
     * 
     * @return GroupVoiceMessagingAccess $groupVoiceMessagingAccess
     */
    public function getGroupVoiceMessagingAccess()
    {
        return ($this->groupVoiceMessagingAccess) ? $this->groupVoiceMessagingAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess = null)
    {
        $this->groupDepartmentAdminUserAccess = ($groupDepartmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $groupDepartmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($groupDepartmentAdminUserAccess);
        $this->groupDepartmentAdminUserAccess->setName('groupDepartmentAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminUserAccess $groupDepartmentAdminUserAccess
     */
    public function getGroupDepartmentAdminUserAccess()
    {
        return ($this->groupDepartmentAdminUserAccess) ? $this->groupDepartmentAdminUserAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess = null)
    {
        $this->groupDepartmentAdminTrunkGroupAccess = ($groupDepartmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $groupDepartmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($groupDepartmentAdminTrunkGroupAccess);
        $this->groupDepartmentAdminTrunkGroupAccess->setName('groupDepartmentAdminTrunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminTrunkGroupAccess $groupDepartmentAdminTrunkGroupAccess
     */
    public function getGroupDepartmentAdminTrunkGroupAccess()
    {
        return ($this->groupDepartmentAdminTrunkGroupAccess) ? $this->groupDepartmentAdminTrunkGroupAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminPhoneNumberExtensionAccess($groupDepartmentAdminPhoneNumberExtensionAccess = null)
    {
        $this->groupDepartmentAdminPhoneNumberExtensionAccess = ($groupDepartmentAdminPhoneNumberExtensionAccess InstanceOf GroupDepartmentAdminPhoneNumberExtensionAccess)
             ? $groupDepartmentAdminPhoneNumberExtensionAccess
             : new GroupDepartmentAdminPhoneNumberExtensionAccess($groupDepartmentAdminPhoneNumberExtensionAccess);
        $this->groupDepartmentAdminPhoneNumberExtensionAccess->setName('groupDepartmentAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminPhoneNumberExtensionAccess $groupDepartmentAdminPhoneNumberExtensionAccess
     */
    public function getGroupDepartmentAdminPhoneNumberExtensionAccess()
    {
        return ($this->groupDepartmentAdminPhoneNumberExtensionAccess) ? $this->groupDepartmentAdminPhoneNumberExtensionAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupDepartmentAdminCallingLineIdNumberAccess($groupDepartmentAdminCallingLineIdNumberAccess = null)
    {
        $this->groupDepartmentAdminCallingLineIdNumberAccess = ($groupDepartmentAdminCallingLineIdNumberAccess InstanceOf GroupDepartmentAdminCallingLineIdNumberAccess)
             ? $groupDepartmentAdminCallingLineIdNumberAccess
             : new GroupDepartmentAdminCallingLineIdNumberAccess($groupDepartmentAdminCallingLineIdNumberAccess);
        $this->groupDepartmentAdminCallingLineIdNumberAccess->setName('groupDepartmentAdminCallingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminCallingLineIdNumberAccess $groupDepartmentAdminCallingLineIdNumberAccess
     */
    public function getGroupDepartmentAdminCallingLineIdNumberAccess()
    {
        return ($this->groupDepartmentAdminCallingLineIdNumberAccess) ? $this->groupDepartmentAdminCallingLineIdNumberAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupUserAuthenticationAccess($groupUserAuthenticationAccess = null)
    {
        $this->groupUserAuthenticationAccess = ($groupUserAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $groupUserAuthenticationAccess
             : new GroupUserAuthenticationAccess($groupUserAuthenticationAccess);
        $this->groupUserAuthenticationAccess->setName('groupUserAuthenticationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserAuthenticationAccess $groupUserAuthenticationAccess
     */
    public function getGroupUserAuthenticationAccess()
    {
        return ($this->groupUserAuthenticationAccess) ? $this->groupUserAuthenticationAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess = null)
    {
        $this->groupUserGroupDirectoryAccess = ($groupUserGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $groupUserGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($groupUserGroupDirectoryAccess);
        $this->groupUserGroupDirectoryAccess->setName('groupUserGroupDirectoryAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserGroupDirectoryAccess $groupUserGroupDirectoryAccess
     */
    public function getGroupUserGroupDirectoryAccess()
    {
        return ($this->groupUserGroupDirectoryAccess) ? $this->groupUserGroupDirectoryAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupUserProfileAccess($groupUserProfileAccess = null)
    {
        $this->groupUserProfileAccess = ($groupUserProfileAccess InstanceOf GroupUserProfileAccess)
             ? $groupUserProfileAccess
             : new GroupUserProfileAccess($groupUserProfileAccess);
        $this->groupUserProfileAccess->setName('groupUserProfileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserProfileAccess $groupUserProfileAccess
     */
    public function getGroupUserProfileAccess()
    {
        return ($this->groupUserProfileAccess) ? $this->groupUserProfileAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupUserEnhancedCallLogsAccess($groupUserEnhancedCallLogsAccess = null)
    {
        $this->groupUserEnhancedCallLogsAccess = ($groupUserEnhancedCallLogsAccess InstanceOf GroupUserCallLogAccess)
             ? $groupUserEnhancedCallLogsAccess
             : new GroupUserCallLogAccess($groupUserEnhancedCallLogsAccess);
        $this->groupUserEnhancedCallLogsAccess->setName('groupUserEnhancedCallLogsAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserCallLogAccess $groupUserEnhancedCallLogsAccess
     */
    public function getGroupUserEnhancedCallLogsAccess()
    {
        return ($this->groupUserEnhancedCallLogsAccess) ? $this->groupUserEnhancedCallLogsAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminProfileAccess($groupAdminProfileAccess = null)
    {
        $this->groupAdminProfileAccess = ($groupAdminProfileAccess InstanceOf GroupAdminProfileAccess)
             ? $groupAdminProfileAccess
             : new GroupAdminProfileAccess($groupAdminProfileAccess);
        $this->groupAdminProfileAccess->setName('groupAdminProfileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminProfileAccess $groupAdminProfileAccess
     */
    public function getGroupAdminProfileAccess()
    {
        return ($this->groupAdminProfileAccess) ? $this->groupAdminProfileAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminUserAccess($groupAdminUserAccess = null)
    {
        $this->groupAdminUserAccess = ($groupAdminUserAccess InstanceOf GroupAdminUserAccess)
             ? $groupAdminUserAccess
             : new GroupAdminUserAccess($groupAdminUserAccess);
        $this->groupAdminUserAccess->setName('groupAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminUserAccess $groupAdminUserAccess
     */
    public function getGroupAdminUserAccess()
    {
        return ($this->groupAdminUserAccess) ? $this->groupAdminUserAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminAdminAccess($groupAdminAdminAccess = null)
    {
        $this->groupAdminAdminAccess = ($groupAdminAdminAccess InstanceOf GroupAdminAdminAccess)
             ? $groupAdminAdminAccess
             : new GroupAdminAdminAccess($groupAdminAdminAccess);
        $this->groupAdminAdminAccess->setName('groupAdminAdminAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAdminAccess $groupAdminAdminAccess
     */
    public function getGroupAdminAdminAccess()
    {
        return ($this->groupAdminAdminAccess) ? $this->groupAdminAdminAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminDepartmentAccess($groupAdminDepartmentAccess = null)
    {
        $this->groupAdminDepartmentAccess = ($groupAdminDepartmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $groupAdminDepartmentAccess
             : new GroupAdminDepartmentAccess($groupAdminDepartmentAccess);
        $this->groupAdminDepartmentAccess->setName('groupAdminDepartmentAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminDepartmentAccess $groupAdminDepartmentAccess
     */
    public function getGroupAdminDepartmentAccess()
    {
        return ($this->groupAdminDepartmentAccess) ? $this->groupAdminDepartmentAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess = null)
    {
        $this->groupAdminAccessDeviceAccess = ($groupAdminAccessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $groupAdminAccessDeviceAccess
             : new GroupAdminAccessDeviceAccess($groupAdminAccessDeviceAccess);
        $this->groupAdminAccessDeviceAccess->setName('groupAdminAccessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAccessDeviceAccess $groupAdminAccessDeviceAccess
     */
    public function getGroupAdminAccessDeviceAccess()
    {
        return ($this->groupAdminAccessDeviceAccess) ? $this->groupAdminAccessDeviceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess = null)
    {
        $this->groupAdminEnhancedServiceInstanceAccess = ($groupAdminEnhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $groupAdminEnhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($groupAdminEnhancedServiceInstanceAccess);
        $this->groupAdminEnhancedServiceInstanceAccess->setName('groupAdminEnhancedServiceInstanceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminEnhancedServiceInstanceAccess $groupAdminEnhancedServiceInstanceAccess
     */
    public function getGroupAdminEnhancedServiceInstanceAccess()
    {
        return ($this->groupAdminEnhancedServiceInstanceAccess) ? $this->groupAdminEnhancedServiceInstanceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess = null)
    {
        $this->groupAdminFeatureAccessCodeAccess = ($groupAdminFeatureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $groupAdminFeatureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($groupAdminFeatureAccessCodeAccess);
        $this->groupAdminFeatureAccessCodeAccess->setName('groupAdminFeatureAccessCodeAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminFeatureAccessCodeAccess $groupAdminFeatureAccessCodeAccess
     */
    public function getGroupAdminFeatureAccessCodeAccess()
    {
        return ($this->groupAdminFeatureAccessCodeAccess) ? $this->groupAdminFeatureAccessCodeAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess = null)
    {
        $this->groupAdminPhoneNumberExtensionAccess = ($groupAdminPhoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $groupAdminPhoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($groupAdminPhoneNumberExtensionAccess);
        $this->groupAdminPhoneNumberExtensionAccess->setName('groupAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminPhoneNumberExtensionAccess $groupAdminPhoneNumberExtensionAccess
     */
    public function getGroupAdminPhoneNumberExtensionAccess()
    {
        return ($this->groupAdminPhoneNumberExtensionAccess) ? $this->groupAdminPhoneNumberExtensionAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminCallingLineIdNumberAccess($groupAdminCallingLineIdNumberAccess = null)
    {
        $this->groupAdminCallingLineIdNumberAccess = ($groupAdminCallingLineIdNumberAccess InstanceOf GroupAdminCallingLineIdNumberAccess)
             ? $groupAdminCallingLineIdNumberAccess
             : new GroupAdminCallingLineIdNumberAccess($groupAdminCallingLineIdNumberAccess);
        $this->groupAdminCallingLineIdNumberAccess->setName('groupAdminCallingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminCallingLineIdNumberAccess $groupAdminCallingLineIdNumberAccess
     */
    public function getGroupAdminCallingLineIdNumberAccess()
    {
        return ($this->groupAdminCallingLineIdNumberAccess) ? $this->groupAdminCallingLineIdNumberAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminServiceAccess($groupAdminServiceAccess = null)
    {
        $this->groupAdminServiceAccess = ($groupAdminServiceAccess InstanceOf GroupAdminServiceAccess)
             ? $groupAdminServiceAccess
             : new GroupAdminServiceAccess($groupAdminServiceAccess);
        $this->groupAdminServiceAccess->setName('groupAdminServiceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminServiceAccess $groupAdminServiceAccess
     */
    public function getGroupAdminServiceAccess()
    {
        return ($this->groupAdminServiceAccess) ? $this->groupAdminServiceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess = null)
    {
        $this->groupAdminTrunkGroupAccess = ($groupAdminTrunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $groupAdminTrunkGroupAccess
             : new GroupAdminTrunkGroupAccess($groupAdminTrunkGroupAccess);
        $this->groupAdminTrunkGroupAccess->setName('groupAdminTrunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminTrunkGroupAccess $groupAdminTrunkGroupAccess
     */
    public function getGroupAdminTrunkGroupAccess()
    {
        return ($this->groupAdminTrunkGroupAccess) ? $this->groupAdminTrunkGroupAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess = null)
    {
        $this->groupAdminSessionAdmissionControlAccess = ($groupAdminSessionAdmissionControlAccess InstanceOf GroupAdminSessionAdmissionControlAccess)
             ? $groupAdminSessionAdmissionControlAccess
             : new GroupAdminSessionAdmissionControlAccess($groupAdminSessionAdmissionControlAccess);
        $this->groupAdminSessionAdmissionControlAccess->setName('groupAdminSessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminSessionAdmissionControlAccess $groupAdminSessionAdmissionControlAccess
     */
    public function getGroupAdminSessionAdmissionControlAccess()
    {
        return ($this->groupAdminSessionAdmissionControlAccess) ? $this->groupAdminSessionAdmissionControlAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminOfficeZoneAccess($groupAdminOfficeZoneAccess = null)
    {
        $this->groupAdminOfficeZoneAccess = ($groupAdminOfficeZoneAccess InstanceOf GroupAdminOfficeZoneAccess)
             ? $groupAdminOfficeZoneAccess
             : new GroupAdminOfficeZoneAccess($groupAdminOfficeZoneAccess);
        $this->groupAdminOfficeZoneAccess->setName('groupAdminOfficeZoneAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminOfficeZoneAccess $groupAdminOfficeZoneAccess
     */
    public function getGroupAdminOfficeZoneAccess()
    {
        return ($this->groupAdminOfficeZoneAccess) ? $this->groupAdminOfficeZoneAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAdminDialableCallerIDAccess($groupAdminDialableCallerIDAccess = null)
    {
        $this->groupAdminDialableCallerIDAccess = ($groupAdminDialableCallerIDAccess InstanceOf GroupAdminDialableCallerIDAccess)
             ? $groupAdminDialableCallerIDAccess
             : new GroupAdminDialableCallerIDAccess($groupAdminDialableCallerIDAccess);
        $this->groupAdminDialableCallerIDAccess->setName('groupAdminDialableCallerIDAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminDialableCallerIDAccess $groupAdminDialableCallerIDAccess
     */
    public function getGroupAdminDialableCallerIDAccess()
    {
        return ($this->groupAdminDialableCallerIDAccess) ? $this->groupAdminDialableCallerIDAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess = null)
    {
        $this->serviceProviderAdminProfileAccess = ($serviceProviderAdminProfileAccess InstanceOf ServiceProviderAdminProfileAccess)
             ? $serviceProviderAdminProfileAccess
             : new ServiceProviderAdminProfileAccess($serviceProviderAdminProfileAccess);
        $this->serviceProviderAdminProfileAccess->setName('serviceProviderAdminProfileAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminProfileAccess $serviceProviderAdminProfileAccess
     */
    public function getServiceProviderAdminProfileAccess()
    {
        return ($this->serviceProviderAdminProfileAccess) ? $this->serviceProviderAdminProfileAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess = null)
    {
        $this->serviceProviderAdminGroupAccess = ($serviceProviderAdminGroupAccess InstanceOf ServiceProviderAdminGroupAccess)
             ? $serviceProviderAdminGroupAccess
             : new ServiceProviderAdminGroupAccess($serviceProviderAdminGroupAccess);
        $this->serviceProviderAdminGroupAccess->setName('serviceProviderAdminGroupAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminGroupAccess $serviceProviderAdminGroupAccess
     */
    public function getServiceProviderAdminGroupAccess()
    {
        return ($this->serviceProviderAdminGroupAccess) ? $this->serviceProviderAdminGroupAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminUserAccess($serviceProviderAdminUserAccess = null)
    {
        $this->serviceProviderAdminUserAccess = ($serviceProviderAdminUserAccess InstanceOf ServiceProviderAdminUserAccess)
             ? $serviceProviderAdminUserAccess
             : new ServiceProviderAdminUserAccess($serviceProviderAdminUserAccess);
        $this->serviceProviderAdminUserAccess->setName('serviceProviderAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminUserAccess $serviceProviderAdminUserAccess
     */
    public function getServiceProviderAdminUserAccess()
    {
        return ($this->serviceProviderAdminUserAccess) ? $this->serviceProviderAdminUserAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess = null)
    {
        $this->serviceProviderAdminAdminAccess = ($serviceProviderAdminAdminAccess InstanceOf ServiceProviderAdminAdminAccess)
             ? $serviceProviderAdminAdminAccess
             : new ServiceProviderAdminAdminAccess($serviceProviderAdminAdminAccess);
        $this->serviceProviderAdminAdminAccess->setName('serviceProviderAdminAdminAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAdminAccess $serviceProviderAdminAdminAccess
     */
    public function getServiceProviderAdminAdminAccess()
    {
        return ($this->serviceProviderAdminAdminAccess) ? $this->serviceProviderAdminAdminAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess = null)
    {
        $this->serviceProviderAdminDepartmentAccess = ($serviceProviderAdminDepartmentAccess InstanceOf ServiceProviderAdminDepartmentAccess)
             ? $serviceProviderAdminDepartmentAccess
             : new ServiceProviderAdminDepartmentAccess($serviceProviderAdminDepartmentAccess);
        $this->serviceProviderAdminDepartmentAccess->setName('serviceProviderAdminDepartmentAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminDepartmentAccess $serviceProviderAdminDepartmentAccess
     */
    public function getServiceProviderAdminDepartmentAccess()
    {
        return ($this->serviceProviderAdminDepartmentAccess) ? $this->serviceProviderAdminDepartmentAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess = null)
    {
        $this->serviceProviderAdminAccessDeviceAccess = ($serviceProviderAdminAccessDeviceAccess InstanceOf ServiceProviderAdminAccessDeviceAccess)
             ? $serviceProviderAdminAccessDeviceAccess
             : new ServiceProviderAdminAccessDeviceAccess($serviceProviderAdminAccessDeviceAccess);
        $this->serviceProviderAdminAccessDeviceAccess->setName('serviceProviderAdminAccessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAccessDeviceAccess $serviceProviderAdminAccessDeviceAccess
     */
    public function getServiceProviderAdminAccessDeviceAccess()
    {
        return ($this->serviceProviderAdminAccessDeviceAccess) ? $this->serviceProviderAdminAccessDeviceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess = null)
    {
        $this->serviceProviderAdminPhoneNumberExtensionAccess = ($serviceProviderAdminPhoneNumberExtensionAccess InstanceOf ServiceProviderAdminPhoneNumberExtensionAccess)
             ? $serviceProviderAdminPhoneNumberExtensionAccess
             : new ServiceProviderAdminPhoneNumberExtensionAccess($serviceProviderAdminPhoneNumberExtensionAccess);
        $this->serviceProviderAdminPhoneNumberExtensionAccess->setName('serviceProviderAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminPhoneNumberExtensionAccess $serviceProviderAdminPhoneNumberExtensionAccess
     */
    public function getServiceProviderAdminPhoneNumberExtensionAccess()
    {
        return ($this->serviceProviderAdminPhoneNumberExtensionAccess) ? $this->serviceProviderAdminPhoneNumberExtensionAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminCallingLineIdNumberAccess($serviceProviderAdminCallingLineIdNumberAccess = null)
    {
        $this->serviceProviderAdminCallingLineIdNumberAccess = ($serviceProviderAdminCallingLineIdNumberAccess InstanceOf ServiceProviderAdminCallingLineIdNumberAccess)
             ? $serviceProviderAdminCallingLineIdNumberAccess
             : new ServiceProviderAdminCallingLineIdNumberAccess($serviceProviderAdminCallingLineIdNumberAccess);
        $this->serviceProviderAdminCallingLineIdNumberAccess->setName('serviceProviderAdminCallingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminCallingLineIdNumberAccess $serviceProviderAdminCallingLineIdNumberAccess
     */
    public function getServiceProviderAdminCallingLineIdNumberAccess()
    {
        return ($this->serviceProviderAdminCallingLineIdNumberAccess) ? $this->serviceProviderAdminCallingLineIdNumberAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess = null)
    {
        $this->serviceProviderAdminServiceAccess = ($serviceProviderAdminServiceAccess InstanceOf ServiceProviderAdminServiceAccess)
             ? $serviceProviderAdminServiceAccess
             : new ServiceProviderAdminServiceAccess($serviceProviderAdminServiceAccess);
        $this->serviceProviderAdminServiceAccess->setName('serviceProviderAdminServiceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServiceAccess $serviceProviderAdminServiceAccess
     */
    public function getServiceProviderAdminServiceAccess()
    {
        return ($this->serviceProviderAdminServiceAccess) ? $this->serviceProviderAdminServiceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess = null)
    {
        $this->serviceProviderAdminServicePackAccess = ($serviceProviderAdminServicePackAccess InstanceOf ServiceProviderAdminServicePackAccess)
             ? $serviceProviderAdminServicePackAccess
             : new ServiceProviderAdminServicePackAccess($serviceProviderAdminServicePackAccess);
        $this->serviceProviderAdminServicePackAccess->setName('serviceProviderAdminServicePackAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServicePackAccess $serviceProviderAdminServicePackAccess
     */
    public function getServiceProviderAdminServicePackAccess()
    {
        return ($this->serviceProviderAdminServicePackAccess) ? $this->serviceProviderAdminServicePackAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess = null)
    {
        $this->serviceProviderAdminSessionAdmissionControlAccess = ($serviceProviderAdminSessionAdmissionControlAccess InstanceOf ServiceProviderAdminSessionAdmissionControlAccess)
             ? $serviceProviderAdminSessionAdmissionControlAccess
             : new ServiceProviderAdminSessionAdmissionControlAccess($serviceProviderAdminSessionAdmissionControlAccess);
        $this->serviceProviderAdminSessionAdmissionControlAccess->setName('serviceProviderAdminSessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminSessionAdmissionControlAccess $serviceProviderAdminSessionAdmissionControlAccess
     */
    public function getServiceProviderAdminSessionAdmissionControlAccess()
    {
        return ($this->serviceProviderAdminSessionAdmissionControlAccess) ? $this->serviceProviderAdminSessionAdmissionControlAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess = null)
    {
        $this->serviceProviderAdminWebBrandingAccess = ($serviceProviderAdminWebBrandingAccess InstanceOf ServiceProviderAdminWebBrandingAccess)
             ? $serviceProviderAdminWebBrandingAccess
             : new ServiceProviderAdminWebBrandingAccess($serviceProviderAdminWebBrandingAccess);
        $this->serviceProviderAdminWebBrandingAccess->setName('serviceProviderAdminWebBrandingAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminWebBrandingAccess $serviceProviderAdminWebBrandingAccess
     */
    public function getServiceProviderAdminWebBrandingAccess()
    {
        return ($this->serviceProviderAdminWebBrandingAccess) ? $this->serviceProviderAdminWebBrandingAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminOfficeZoneAccess($serviceProviderAdminOfficeZoneAccess = null)
    {
        $this->serviceProviderAdminOfficeZoneAccess = ($serviceProviderAdminOfficeZoneAccess InstanceOf ServiceProviderAdminOfficeZoneAccess)
             ? $serviceProviderAdminOfficeZoneAccess
             : new ServiceProviderAdminOfficeZoneAccess($serviceProviderAdminOfficeZoneAccess);
        $this->serviceProviderAdminOfficeZoneAccess->setName('serviceProviderAdminOfficeZoneAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminOfficeZoneAccess $serviceProviderAdminOfficeZoneAccess
     */
    public function getServiceProviderAdminOfficeZoneAccess()
    {
        return ($this->serviceProviderAdminOfficeZoneAccess) ? $this->serviceProviderAdminOfficeZoneAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminCommunicationBarringAccess($serviceProviderAdminCommunicationBarringAccess = null)
    {
        $this->serviceProviderAdminCommunicationBarringAccess = ($serviceProviderAdminCommunicationBarringAccess InstanceOf ServiceProviderAdminCommunicationBarringAccess)
             ? $serviceProviderAdminCommunicationBarringAccess
             : new ServiceProviderAdminCommunicationBarringAccess($serviceProviderAdminCommunicationBarringAccess);
        $this->serviceProviderAdminCommunicationBarringAccess->setName('serviceProviderAdminCommunicationBarringAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminCommunicationBarringAccess $serviceProviderAdminCommunicationBarringAccess
     */
    public function getServiceProviderAdminCommunicationBarringAccess()
    {
        return ($this->serviceProviderAdminCommunicationBarringAccess) ? $this->serviceProviderAdminCommunicationBarringAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setEnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess = null)
    {
        $this->enterpriseAdminNetworkPolicyAccess = ($enterpriseAdminNetworkPolicyAccess InstanceOf EnterpriseAdminNetworkPolicyAccess)
             ? $enterpriseAdminNetworkPolicyAccess
             : new EnterpriseAdminNetworkPolicyAccess($enterpriseAdminNetworkPolicyAccess);
        $this->enterpriseAdminNetworkPolicyAccess->setName('enterpriseAdminNetworkPolicyAccess');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAdminNetworkPolicyAccess $enterpriseAdminNetworkPolicyAccess
     */
    public function getEnterpriseAdminNetworkPolicyAccess()
    {
        return ($this->enterpriseAdminNetworkPolicyAccess) ? $this->enterpriseAdminNetworkPolicyAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceProviderAdminDialableCallerIDAccess($serviceProviderAdminDialableCallerIDAccess = null)
    {
        $this->serviceProviderAdminDialableCallerIDAccess = ($serviceProviderAdminDialableCallerIDAccess InstanceOf ServiceProviderAdminDialableCallerIDAccess)
             ? $serviceProviderAdminDialableCallerIDAccess
             : new ServiceProviderAdminDialableCallerIDAccess($serviceProviderAdminDialableCallerIDAccess);
        $this->serviceProviderAdminDialableCallerIDAccess->setName('serviceProviderAdminDialableCallerIDAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminDialableCallerIDAccess $serviceProviderAdminDialableCallerIDAccess
     */
    public function getServiceProviderAdminDialableCallerIDAccess()
    {
        return ($this->serviceProviderAdminDialableCallerIDAccess) ? $this->serviceProviderAdminDialableCallerIDAccess->getValue() : null;
    }
}