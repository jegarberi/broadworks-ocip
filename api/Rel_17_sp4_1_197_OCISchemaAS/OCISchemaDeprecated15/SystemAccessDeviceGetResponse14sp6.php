<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevicePhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\DeviceManagementUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceSerialNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to: SystemAccessDeviceGetRequest14sp6
 *         Replaced by: SystemAccessDeviceGetRequest16
 */
class SystemAccessDeviceGetResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemAccessDeviceGetResponse14sp6';
    protected $deviceType;
    protected $protocol;
    protected $netAddress;
    protected $port;
    protected $outboundProxyServerNetAddress;
    protected $stunServerNetAddress;
    protected $macAddress;
    protected $serialNumber;
    protected $description;
    protected $numberOfPorts;
    protected $numberOfAssignedPorts;
    protected $status;
    protected $physicalLocation;
    protected $transportProtocol;
    protected $mobilityManagerProvisioningURL;
    protected $mobilityManagerProvisioningUserName;
    protected $mobilityManagerDefaultOriginatingServiceKey;
    protected $mobilityManagerDefaultTerminatingServiceKey;
    protected $useCustomUserNamePassword;
    protected $userName;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemAccessDeviceGetResponse14sp6 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType) ? $this->deviceType->getValue() : null;
    }

    /**
     * 
     */
    public function setProtocol($protocol = null)
    {
        $this->protocol = ($protocol InstanceOf AccessDeviceProtocol)
             ? $protocol
             : new AccessDeviceProtocol($protocol);
        $this->protocol->setName('protocol');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceProtocol $protocol
     */
    public function getProtocol()
    {
        return ($this->protocol) ? $this->protocol->getValue() : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress) ? $this->netAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
        $this->port->setName('port');
        return $this;
    }

    /**
     * 
     * @return Port1025 $port
     */
    public function getPort()
    {
        return ($this->port) ? $this->port->getValue() : null;
    }

    /**
     * 
     */
    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress = null)
    {
        $this->outboundProxyServerNetAddress = ($outboundProxyServerNetAddress InstanceOf NetAddress)
             ? $outboundProxyServerNetAddress
             : new NetAddress($outboundProxyServerNetAddress);
        $this->outboundProxyServerNetAddress->setName('outboundProxyServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $outboundProxyServerNetAddress
     */
    public function getOutboundProxyServerNetAddress()
    {
        return ($this->outboundProxyServerNetAddress) ? $this->outboundProxyServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setStunServerNetAddress($stunServerNetAddress = null)
    {
        $this->stunServerNetAddress = ($stunServerNetAddress InstanceOf NetAddress)
             ? $stunServerNetAddress
             : new NetAddress($stunServerNetAddress);
        $this->stunServerNetAddress->setName('stunServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $stunServerNetAddress
     */
    public function getStunServerNetAddress()
    {
        return ($this->stunServerNetAddress) ? $this->stunServerNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
        $this->macAddress->setName('macAddress');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMACAddress $macAddress
     */
    public function getMacAddress()
    {
        return ($this->macAddress) ? $this->macAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setSerialNumber($serialNumber = null)
    {
        $this->serialNumber = ($serialNumber InstanceOf AccessDeviceSerialNumber)
             ? $serialNumber
             : new AccessDeviceSerialNumber($serialNumber);
        $this->serialNumber->setName('serialNumber');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceSerialNumber $serialNumber
     */
    public function getSerialNumber()
    {
        return ($this->serialNumber) ? $this->serialNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf AccessDeviceDescription)
             ? $description
             : new AccessDeviceDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberOfPorts(UnboundedPositiveInt $numberOfPorts = null)
    {
        $this->numberOfPorts = ($numberOfPorts InstanceOf UnboundedPositiveInt)
             ? $numberOfPorts
             : new UnboundedPositiveInt($numberOfPorts);
        $this->numberOfPorts->setName('numberOfPorts');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt $numberOfPorts
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts;
    }

    /**
     * 
     */
    public function setNumberOfAssignedPorts($numberOfAssignedPorts = null)
    {
        $this->numberOfAssignedPorts = new PrimitiveType($numberOfAssignedPorts);
        $this->numberOfAssignedPorts->setName('numberOfAssignedPorts');
        return $this;
    }

    /**
     * 
     * @return int $numberOfAssignedPorts
     */
    public function getNumberOfAssignedPorts()
    {
        return ($this->numberOfAssignedPorts) ? $this->numberOfAssignedPorts->getValue() : null;
    }

    /**
     * 
     */
    public function setStatus($status = null)
    {
        $this->status = ($status InstanceOf AccessDeviceStatus)
             ? $status
             : new AccessDeviceStatus($status);
        $this->status->setName('status');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceStatus $status
     */
    public function getStatus()
    {
        return ($this->status) ? $this->status->getValue() : null;
    }

    /**
     * 
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        $this->physicalLocation = ($physicalLocation InstanceOf AccessDevicePhysicalLocation)
             ? $physicalLocation
             : new AccessDevicePhysicalLocation($physicalLocation);
        $this->physicalLocation->setName('physicalLocation');
        return $this;
    }

    /**
     * 
     * @return AccessDevicePhysicalLocation $physicalLocation
     */
    public function getPhysicalLocation()
    {
        return ($this->physicalLocation) ? $this->physicalLocation->getValue() : null;
    }

    /**
     * 
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
        $this->transportProtocol->setName('transportProtocol');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $transportProtocol
     */
    public function getTransportProtocol()
    {
        return ($this->transportProtocol) ? $this->transportProtocol->getValue() : null;
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL = null)
    {
        $this->mobilityManagerProvisioningURL = ($mobilityManagerProvisioningURL InstanceOf URL)
             ? $mobilityManagerProvisioningURL
             : new URL($mobilityManagerProvisioningURL);
        $this->mobilityManagerProvisioningURL->setName('mobilityManagerProvisioningURL');
        return $this;
    }

    /**
     * 
     * @return URL $mobilityManagerProvisioningURL
     */
    public function getMobilityManagerProvisioningURL()
    {
        return ($this->mobilityManagerProvisioningURL) ? $this->mobilityManagerProvisioningURL->getValue() : null;
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName = null)
    {
        $this->mobilityManagerProvisioningUserName = ($mobilityManagerProvisioningUserName InstanceOf MobilityManagerProvisioningUserName)
             ? $mobilityManagerProvisioningUserName
             : new MobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
        $this->mobilityManagerProvisioningUserName->setName('mobilityManagerProvisioningUserName');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerProvisioningUserName $mobilityManagerProvisioningUserName
     */
    public function getMobilityManagerProvisioningUserName()
    {
        return ($this->mobilityManagerProvisioningUserName) ? $this->mobilityManagerProvisioningUserName->getValue() : null;
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey = null)
    {
        $this->mobilityManagerDefaultOriginatingServiceKey = ($mobilityManagerDefaultOriginatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultOriginatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultOriginatingServiceKey);
        $this->mobilityManagerDefaultOriginatingServiceKey->setName('mobilityManagerDefaultOriginatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $mobilityManagerDefaultOriginatingServiceKey
     */
    public function getMobilityManagerDefaultOriginatingServiceKey()
    {
        return ($this->mobilityManagerDefaultOriginatingServiceKey) ? $this->mobilityManagerDefaultOriginatingServiceKey->getValue() : null;
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey = null)
    {
        $this->mobilityManagerDefaultTerminatingServiceKey = ($mobilityManagerDefaultTerminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultTerminatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultTerminatingServiceKey);
        $this->mobilityManagerDefaultTerminatingServiceKey->setName('mobilityManagerDefaultTerminatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $mobilityManagerDefaultTerminatingServiceKey
     */
    public function getMobilityManagerDefaultTerminatingServiceKey()
    {
        return ($this->mobilityManagerDefaultTerminatingServiceKey) ? $this->mobilityManagerDefaultTerminatingServiceKey->getValue() : null;
    }

    /**
     * 
     */
    public function setUseCustomUserNamePassword($useCustomUserNamePassword = null)
    {
        $this->useCustomUserNamePassword = new PrimitiveType($useCustomUserNamePassword);
        $this->useCustomUserNamePassword->setName('useCustomUserNamePassword');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomUserNamePassword
     */
    public function getUseCustomUserNamePassword()
    {
        return ($this->useCustomUserNamePassword) ? $this->useCustomUserNamePassword->getValue() : null;
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf DeviceManagementUserName)
             ? $userName
             : new DeviceManagementUserName($userName);
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementUserName $userName
     */
    public function getUserName()
    {
        return ($this->userName) ? $this->userName->getValue() : null;
    }
}