<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Return the address and credentials of the File Repository hosting the requested access device file. Also return the file name and path on the File Repository. This is a response to DeviceManagementFileAuthLocationGetRequest.
 */
class DeviceManagementFileAuthLocationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'DeviceManagementFileAuthLocationGetResponse';
    protected $fileRepositoryUserName;
    protected $fileRepositoryPassword;
    protected $netAddress;
    protected $remoteFileFormat;
    protected $portNumber;
    protected $rootDirectory;
    protected $cpeFileDirectory;
    protected $secure;
    protected $macInNonRequestURI;
    protected $macFormatInNonRequestURI;
    protected $useHttpDigestAuthentication;
    protected $macBasedFileAuthentication;
    protected $userNamePasswordFileAuthentication;
    protected $completionNotification;
    protected $fileCategory;

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
    public function setFileRepositoryUserName($fileRepositoryUserName = null)
    {
        $this->fileRepositoryUserName = ($fileRepositoryUserName InstanceOf FileRepositoryUserName)
             ? $fileRepositoryUserName
             : new FileRepositoryUserName($fileRepositoryUserName);
        $this->fileRepositoryUserName->setName('fileRepositoryUserName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserName $fileRepositoryUserName
     */
    public function getFileRepositoryUserName()
    {
        return ($this->fileRepositoryUserName) ? $this->fileRepositoryUserName->getValue() : null;
    }

    /**
     * 
     */
    public function setFileRepositoryPassword($fileRepositoryPassword = null)
    {
        $this->fileRepositoryPassword = ($fileRepositoryPassword InstanceOf FileRepositoryUserPassword)
             ? $fileRepositoryPassword
             : new FileRepositoryUserPassword($fileRepositoryPassword);
        $this->fileRepositoryPassword->setName('fileRepositoryPassword');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserPassword $fileRepositoryPassword
     */
    public function getFileRepositoryPassword()
    {
        return ($this->fileRepositoryPassword) ? $this->fileRepositoryPassword->getValue() : null;
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
    public function setRemoteFileFormat($remoteFileFormat = null)
    {
        $this->remoteFileFormat = ($remoteFileFormat InstanceOf DeviceManagementFileFormat)
             ? $remoteFileFormat
             : new DeviceManagementFileFormat($remoteFileFormat);
        $this->remoteFileFormat->setName('remoteFileFormat');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileFormat $remoteFileFormat
     */
    public function getRemoteFileFormat()
    {
        return ($this->remoteFileFormat) ? $this->remoteFileFormat->getValue() : null;
    }

    /**
     * 
     */
    public function setPortNumber($portNumber = null)
    {
        $this->portNumber = ($portNumber InstanceOf Port)
             ? $portNumber
             : new Port($portNumber);
        $this->portNumber->setName('portNumber');
        return $this;
    }

    /**
     * 
     * @return Port $portNumber
     */
    public function getPortNumber()
    {
        return ($this->portNumber) ? $this->portNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setRootDirectory($rootDirectory = null)
    {
        $this->rootDirectory = ($rootDirectory InstanceOf CPEFileDirectory)
             ? $rootDirectory
             : new CPEFileDirectory($rootDirectory);
        $this->rootDirectory->setName('rootDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $rootDirectory
     */
    public function getRootDirectory()
    {
        return ($this->rootDirectory) ? $this->rootDirectory->getValue() : null;
    }

    /**
     * 
     */
    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
        $this->cpeFileDirectory->setName('cpeFileDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $cpeFileDirectory
     */
    public function getCpeFileDirectory()
    {
        return ($this->cpeFileDirectory) ? $this->cpeFileDirectory->getValue() : null;
    }

    /**
     * 
     */
    public function setSecure($secure = null)
    {
        $this->secure = new PrimitiveType($secure);
        $this->secure->setName('secure');
        return $this;
    }

    /**
     * 
     * @return boolean $secure
     */
    public function getSecure()
    {
        return ($this->secure) ? $this->secure->getValue() : null;
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        $this->macInNonRequestURI = new PrimitiveType($macInNonRequestURI);
        $this->macInNonRequestURI->setName('macInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return boolean $macInNonRequestURI
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
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
        $this->macFormatInNonRequestURI->setName('macFormatInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI $macFormatInNonRequestURI
     */
    public function getMacFormatInNonRequestURI()
    {
        return ($this->macFormatInNonRequestURI) ? $this->macFormatInNonRequestURI->getValue() : null;
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        $this->useHttpDigestAuthentication = new PrimitiveType($useHttpDigestAuthentication);
        $this->useHttpDigestAuthentication->setName('useHttpDigestAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $useHttpDigestAuthentication
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
        $this->macBasedFileAuthentication = new PrimitiveType($macBasedFileAuthentication);
        $this->macBasedFileAuthentication->setName('macBasedFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $macBasedFileAuthentication
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
        $this->userNamePasswordFileAuthentication = new PrimitiveType($userNamePasswordFileAuthentication);
        $this->userNamePasswordFileAuthentication->setName('userNamePasswordFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $userNamePasswordFileAuthentication
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return ($this->userNamePasswordFileAuthentication) ? $this->userNamePasswordFileAuthentication->getValue() : null;
    }

    /**
     * 
     */
    public function setCompletionNotification($completionNotification = null)
    {
        $this->completionNotification = new PrimitiveType($completionNotification);
        $this->completionNotification->setName('completionNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $completionNotification
     */
    public function getCompletionNotification()
    {
        return ($this->completionNotification) ? $this->completionNotification->getValue() : null;
    }

    /**
     * 
     */
    public function setFileCategory($fileCategory = null)
    {
        $this->fileCategory = ($fileCategory InstanceOf DeviceManagementFileCategory)
             ? $fileCategory
             : new DeviceManagementFileCategory($fileCategory);
        $this->fileCategory->setName('fileCategory');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileCategory $fileCategory
     */
    public function getFileCategory()
    {
        return ($this->fileCategory) ? $this->fileCategory->getValue() : null;
    }
}