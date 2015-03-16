<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaBandwidthEnforcementType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaBandwidthBitsPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaType16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CodecName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a Media to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaAddRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemMediaAddRequest16';
    protected $mediaName;
    protected $codecName;
    protected $mediaType;
    protected $bandwidthEnforcementType;
    protected $mediaBandwidth;

    public function __construct(
         $mediaName = '',
         $codecName = '',
         $mediaType = '',
         $bandwidthEnforcementType = '',
         $mediaBandwidth = null
    ) {
        $this->setMediaName($mediaName);
        $this->setCodecName($codecName);
        $this->setMediaType($mediaType);
        $this->setBandwidthEnforcementType($bandwidthEnforcementType);
        $this->setMediaBandwidth($mediaBandwidth);
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
    public function setMediaName($mediaName = null)
    {
        $this->mediaName = ($mediaName InstanceOf MediaName)
             ? $mediaName
             : new MediaName($mediaName);
        $this->mediaName->setName('mediaName');
        return $this;
    }

    /**
     * 
     * @return MediaName $mediaName
     */
    public function getMediaName()
    {
        return ($this->mediaName) ? $this->mediaName->getValue() : null;
    }

    /**
     * 
     */
    public function setCodecName($codecName = null)
    {
        $this->codecName = ($codecName InstanceOf CodecName)
             ? $codecName
             : new CodecName($codecName);
        $this->codecName->setName('codecName');
        return $this;
    }

    /**
     * 
     * @return CodecName $codecName
     */
    public function getCodecName()
    {
        return ($this->codecName) ? $this->codecName->getValue() : null;
    }

    /**
     * 
     */
    public function setMediaType($mediaType = null)
    {
        $this->mediaType = ($mediaType InstanceOf MediaType16)
             ? $mediaType
             : new MediaType16($mediaType);
        $this->mediaType->setName('mediaType');
        return $this;
    }

    /**
     * 
     * @return MediaType16 $mediaType
     */
    public function getMediaType()
    {
        return ($this->mediaType) ? $this->mediaType->getValue() : null;
    }

    /**
     * 
     */
    public function setBandwidthEnforcementType($bandwidthEnforcementType = null)
    {
        $this->bandwidthEnforcementType = ($bandwidthEnforcementType InstanceOf MediaBandwidthEnforcementType)
             ? $bandwidthEnforcementType
             : new MediaBandwidthEnforcementType($bandwidthEnforcementType);
        $this->bandwidthEnforcementType->setName('bandwidthEnforcementType');
        return $this;
    }

    /**
     * 
     * @return MediaBandwidthEnforcementType $bandwidthEnforcementType
     */
    public function getBandwidthEnforcementType()
    {
        return ($this->bandwidthEnforcementType) ? $this->bandwidthEnforcementType->getValue() : null;
    }

    /**
     * 
     */
    public function setMediaBandwidth($mediaBandwidth = null)
    {
        $this->mediaBandwidth = ($mediaBandwidth InstanceOf MediaBandwidthBitsPerSecond)
             ? $mediaBandwidth
             : new MediaBandwidthBitsPerSecond($mediaBandwidth);
        $this->mediaBandwidth->setName('mediaBandwidth');
        return $this;
    }

    /**
     * 
     * @return MediaBandwidthBitsPerSecond $mediaBandwidth
     */
    public function getMediaBandwidth()
    {
        return ($this->mediaBandwidth) ? $this->mediaBandwidth->getValue() : null;
    }
}