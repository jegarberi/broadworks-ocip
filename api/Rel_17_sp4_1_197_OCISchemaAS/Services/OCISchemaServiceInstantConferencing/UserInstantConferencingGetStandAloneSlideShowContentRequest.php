<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideShowPasswordHex;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get slide show content of a recorded conference.
 *         The response is either UserInstantConferencingGetStandAloneSlideShowContentResponse
 *         or ErrorResponse.
 */
class UserInstantConferencingGetStandAloneSlideShowContentRequest extends ComplexType implements ComplexInterface
{
    public    $responseType          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneSlideShowContentResponse';
    public    $name = 'UserInstantConferencingGetStandAloneSlideShowContentRequest';
    protected $bridgeServiceUserId;
    protected $conferenceOwnerUserId;
    protected $documentId;
    protected $slideshowPasswordHex;

    public function __construct(
         $bridgeServiceUserId = '',
         $conferenceOwnerUserId = '',
         $documentId = '',
         $slideshowPasswordHex = null
    ) {
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setDocumentId($documentId);
        $this->setSlideshowPasswordHex($slideshowPasswordHex);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneSlideShowContentResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
        $this->bridgeServiceUserId->setName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return ($this->bridgeServiceUserId) ? $this->bridgeServiceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $conferenceOwnerUserId
     */
    public function getConferenceOwnerUserId()
    {
        return ($this->conferenceOwnerUserId) ? $this->conferenceOwnerUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
        $this->documentId->setName('documentId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingDocumentId $documentId
     */
    public function getDocumentId()
    {
        return ($this->documentId) ? $this->documentId->getValue() : null;
    }

    /**
     * 
     */
    public function setSlideshowPasswordHex($slideshowPasswordHex = null)
    {
        $this->slideshowPasswordHex = ($slideshowPasswordHex InstanceOf InstantConferencingSlideShowPasswordHex)
             ? $slideshowPasswordHex
             : new InstantConferencingSlideShowPasswordHex($slideshowPasswordHex);
        $this->slideshowPasswordHex->setName('slideshowPasswordHex');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideShowPasswordHex $slideshowPasswordHex
     */
    public function getSlideshowPasswordHex()
    {
        return ($this->slideshowPasswordHex) ? $this->slideshowPasswordHex->getValue() : null;
    }
}