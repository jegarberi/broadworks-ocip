<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryAccessType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceAccessProtocol16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigestHa1Complement;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignedPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RealmName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Md5Hash;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the address and credentials of the File Repository hosting the requested access device file. Also get the file name and path on the File Repository. The response is either a DeviceManagementFileAuthLocationGetResponse or an ErrorResponse.
 */
class DeviceManagementFileAuthLocationGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\DeviceManagementFileAuthLocationGetResponse';
    public    $name = 'DeviceManagementFileAuthLocationGetRequest';
    protected $deviceAccessProtocol;
    protected $deviceAccessMethod;
    protected $deviceAccessURI;
    protected $accessDeviceUserName;
    protected $accessDeviceUserPassword;
    protected $signedPassword;
    protected $macAddress;
    protected $realmName;
    protected $digestHa1Complement;
    protected $digestResponse;

    public function __construct(
         $deviceAccessProtocol = '',
         $deviceAccessMethod = '',
         $deviceAccessURI = '',
         $accessDeviceUserName = null,
         $accessDeviceUserPassword = null,
         $signedPassword = null,
         $macAddress = null,
         $realmName = null,
         $digestHa1Complement = null,
         $digestResponse = null
    ) {
        $this->setDeviceAccessProtocol($deviceAccessProtocol);
        $this->setDeviceAccessMethod($deviceAccessMethod);
        $this->setDeviceAccessURI($deviceAccessURI);
        $this->setAccessDeviceUserName($accessDeviceUserName);
        $this->setAccessDeviceUserPassword($accessDeviceUserPassword);
        $this->setSignedPassword($signedPassword);
        $this->setMacAddress($macAddress);
        $this->setRealmName($realmName);
        $this->setDigestHa1Complement($digestHa1Complement);
        $this->setDigestResponse($digestResponse);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\DeviceManagementFileAuthLocationGetResponse $response
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
        $this->deviceAccessProtocol = ($deviceAccessProtocol InstanceOf DeviceAccessProtocol16)
             ? $deviceAccessProtocol
             : new DeviceAccessProtocol16($deviceAccessProtocol);
        $this->deviceAccessProtocol->setName('deviceAccessProtocol');
        return $this;
    }

    /**
     * 
     * @return DeviceAccessProtocol16 $deviceAccessProtocol
     */
    public function getDeviceAccessProtocol()
    {
        return ($this->deviceAccessProtocol) ? $this->deviceAccessProtocol->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceAccessMethod($deviceAccessMethod = null)
    {
        $this->deviceAccessMethod = ($deviceAccessMethod InstanceOf FileRepositoryAccessType)
             ? $deviceAccessMethod
             : new FileRepositoryAccessType($deviceAccessMethod);
        $this->deviceAccessMethod->setName('deviceAccessMethod');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryAccessType $deviceAccessMethod
     */
    public function getDeviceAccessMethod()
    {
        return ($this->deviceAccessMethod) ? $this->deviceAccessMethod->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceAccessURI($deviceAccessURI = null)
    {
        $this->deviceAccessURI = ($deviceAccessURI InstanceOf DeviceManagementAccessURI)
             ? $deviceAccessURI
             : new DeviceManagementAccessURI($deviceAccessURI);
        $this->deviceAccessURI->setName('deviceAccessURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI $deviceAccessURI
     */
    public function getDeviceAccessURI()
    {
        return ($this->deviceAccessURI) ? $this->deviceAccessURI->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessDeviceUserName($accessDeviceUserName = null)
    {
        $this->accessDeviceUserName = ($accessDeviceUserName InstanceOf UserId)
             ? $accessDeviceUserName
             : new UserId($accessDeviceUserName);
        $this->accessDeviceUserName->setName('accessDeviceUserName');
        return $this;
    }

    /**
     * 
     * @return UserId $accessDeviceUserName
     */
    public function getAccessDeviceUserName()
    {
        return ($this->accessDeviceUserName) ? $this->accessDeviceUserName->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessDeviceUserPassword($accessDeviceUserPassword = null)
    {
        $this->accessDeviceUserPassword = ($accessDeviceUserPassword InstanceOf Password)
             ? $accessDeviceUserPassword
             : new Password($accessDeviceUserPassword);
        $this->accessDeviceUserPassword->setName('accessDeviceUserPassword');
        return $this;
    }

    /**
     * 
     * @return Password $accessDeviceUserPassword
     */
    public function getAccessDeviceUserPassword()
    {
        return ($this->accessDeviceUserPassword) ? $this->accessDeviceUserPassword->getValue() : null;
    }

    /**
     * 
     */
    public function setSignedPassword($signedPassword = null)
    {
        $this->signedPassword = ($signedPassword InstanceOf SignedPassword)
             ? $signedPassword
             : new SignedPassword($signedPassword);
        $this->signedPassword->setName('signedPassword');
        return $this;
    }

    /**
     * 
     * @return SignedPassword $signedPassword
     */
    public function getSignedPassword()
    {
        return ($this->signedPassword) ? $this->signedPassword->getValue() : null;
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
    public function setRealmName($realmName = null)
    {
        $this->realmName = ($realmName InstanceOf RealmName)
             ? $realmName
             : new RealmName($realmName);
        $this->realmName->setName('realmName');
        return $this;
    }

    /**
     * 
     * @return RealmName $realmName
     */
    public function getRealmName()
    {
        return ($this->realmName) ? $this->realmName->getValue() : null;
    }

    /**
     * 
     */
    public function setDigestHa1Complement($digestHa1Complement = null)
    {
        $this->digestHa1Complement = ($digestHa1Complement InstanceOf DigestHa1Complement)
             ? $digestHa1Complement
             : new DigestHa1Complement($digestHa1Complement);
        $this->digestHa1Complement->setName('digestHa1Complement');
        return $this;
    }

    /**
     * 
     * @return DigestHa1Complement $digestHa1Complement
     */
    public function getDigestHa1Complement()
    {
        return ($this->digestHa1Complement) ? $this->digestHa1Complement->getValue() : null;
    }

    /**
     * 
     */
    public function setDigestResponse($digestResponse = null)
    {
        $this->digestResponse = ($digestResponse InstanceOf Md5Hash)
             ? $digestResponse
             : new Md5Hash($digestResponse);
        $this->digestResponse->setName('digestResponse');
        return $this;
    }

    /**
     * 
     * @return Md5Hash $digestResponse
     */
    public function getDigestResponse()
    {
        return ($this->digestResponse) ? $this->digestResponse->getValue() : null;
    }
}