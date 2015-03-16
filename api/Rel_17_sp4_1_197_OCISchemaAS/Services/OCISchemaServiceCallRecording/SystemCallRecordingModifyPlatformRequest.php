<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\CallRecordingPlatformDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\CallRecordingPlatformName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\MediaStream;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the specified Call Recording platform.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallRecordingModifyPlatformRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallRecordingModifyPlatformRequest';
    protected $name;
    protected $netAddress;
    protected $port;
    protected $mediaStream;
    protected $becomeSystemDefault;
    protected $transportType;
    protected $description;

    public function __construct(
         $name = '',
         $netAddress = null,
         $port = null,
         $mediaStream = null,
         $becomeSystemDefault = null,
         $transportType = null,
         $description = null
    ) {
        $this->setName($name);
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setMediaStream($mediaStream);
        $this->setBecomeSystemDefault($becomeSystemDefault);
        $this->setTransportType($transportType);
        $this->setDescription($description);
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
        $this->name = ($name InstanceOf CallRecordingPlatformName)
             ? $name
             : new CallRecordingPlatformName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CallRecordingPlatformName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
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
        $this->port = ($port InstanceOf Port)
             ? $port
             : new Port($port);
        $this->port->setName('port');
        return $this;
    }

    /**
     * 
     * @return Port $port
     */
    public function getPort()
    {
        return ($this->port) ? $this->port->getValue() : null;
    }

    /**
     * 
     */
    public function setMediaStream($mediaStream = null)
    {
        $this->mediaStream = ($mediaStream InstanceOf MediaStream)
             ? $mediaStream
             : new MediaStream($mediaStream);
        $this->mediaStream->setName('mediaStream');
        return $this;
    }

    /**
     * 
     * @return MediaStream $mediaStream
     */
    public function getMediaStream()
    {
        return ($this->mediaStream) ? $this->mediaStream->getValue() : null;
    }

    /**
     * 
     */
    public function setBecomeSystemDefault($becomeSystemDefault = null)
    {
        $this->becomeSystemDefault = new PrimitiveType($becomeSystemDefault);
        $this->becomeSystemDefault->setName('becomeSystemDefault');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeSystemDefault
     */
    public function getBecomeSystemDefault()
    {
        return ($this->becomeSystemDefault) ? $this->becomeSystemDefault->getValue() : null;
    }

    /**
     * 
     */
    public function setTransportType($transportType = null)
    {
        $this->transportType = ($transportType InstanceOf TransportProtocol)
             ? $transportType
             : new TransportProtocol($transportType);
        $this->transportType->setName('transportType');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $transportType
     */
    public function getTransportType()
    {
        return ($this->transportType) ? $this->transportType->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallRecordingPlatformDescription)
             ? $description
             : new CallRecordingPlatformDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CallRecordingPlatformDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}