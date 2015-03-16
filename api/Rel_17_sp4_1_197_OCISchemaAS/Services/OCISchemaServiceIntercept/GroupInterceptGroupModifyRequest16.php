<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptInboundCall;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group's intercept group service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupInterceptGroupModifyRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupInterceptGroupModifyRequest16';
    protected $serviceProviderId;
    protected $groupId;
    protected $isActive;
    protected $announcementSelection;
    protected $audioFile;
    protected $videoFile;
    protected $playNewPhoneNumber;
    protected $newPhoneNumber;
    protected $transferOnZeroToPhoneNumber;
    protected $transferPhoneNumber;
    protected $rerouteOutboundCalls;
    protected $outboundReroutePhoneNumber;
    protected $allowOutboundLocalCalls;
    protected $inboundCallMode;
    protected $alternateBlockingAnnouncement;
    protected $routeToVoiceMail;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $isActive = null,
         $announcementSelection = null,
         LabeledMediaFileResource $audioFile = null,
         LabeledMediaFileResource $videoFile = null,
         $playNewPhoneNumber = null,
         $newPhoneNumber = null,
         $transferOnZeroToPhoneNumber = null,
         $transferPhoneNumber = null,
         $rerouteOutboundCalls = null,
         $outboundReroutePhoneNumber = null,
         $allowOutboundLocalCalls = null,
         $inboundCallMode = null,
         $alternateBlockingAnnouncement = null,
         $routeToVoiceMail = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIsActive($isActive);
        $this->setAnnouncementSelection($announcementSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoFile($videoFile);
        $this->setPlayNewPhoneNumber($playNewPhoneNumber);
        $this->setNewPhoneNumber($newPhoneNumber);
        $this->setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setRerouteOutboundCalls($rerouteOutboundCalls);
        $this->setOutboundReroutePhoneNumber($outboundReroutePhoneNumber);
        $this->setAllowOutboundLocalCalls($allowOutboundLocalCalls);
        $this->setInboundCallMode($inboundCallMode);
        $this->setAlternateBlockingAnnouncement($alternateBlockingAnnouncement);
        $this->setRouteToVoiceMail($routeToVoiceMail);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
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
    public function setAnnouncementSelection($announcementSelection = null)
    {
        $this->announcementSelection = ($announcementSelection InstanceOf AnnouncementSelection)
             ? $announcementSelection
             : new AnnouncementSelection($announcementSelection);
        $this->announcementSelection->setName('announcementSelection');
        return $this;
    }

    /**
     * 
     * @return AnnouncementSelection $announcementSelection
     */
    public function getAnnouncementSelection()
    {
        return ($this->announcementSelection) ? $this->announcementSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioFile(LabeledMediaFileResource $audioFile = null)
    {
        $this->audioFile = ($audioFile InstanceOf LabeledMediaFileResource)
             ? $audioFile
             : new LabeledMediaFileResource($audioFile);
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $audioFile
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * 
     */
    public function setVideoFile(LabeledMediaFileResource $videoFile = null)
    {
        $this->videoFile = ($videoFile InstanceOf LabeledMediaFileResource)
             ? $videoFile
             : new LabeledMediaFileResource($videoFile);
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $videoFile
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * 
     */
    public function setPlayNewPhoneNumber($playNewPhoneNumber = null)
    {
        $this->playNewPhoneNumber = new PrimitiveType($playNewPhoneNumber);
        $this->playNewPhoneNumber->setName('playNewPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $playNewPhoneNumber
     */
    public function getPlayNewPhoneNumber()
    {
        return ($this->playNewPhoneNumber) ? $this->playNewPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        $this->newPhoneNumber = ($newPhoneNumber InstanceOf DN)
             ? $newPhoneNumber
             : new DN($newPhoneNumber);
        $this->newPhoneNumber->setName('newPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $newPhoneNumber
     */
    public function getNewPhoneNumber()
    {
        return ($this->newPhoneNumber) ? $this->newPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        $this->transferOnZeroToPhoneNumber = new PrimitiveType($transferOnZeroToPhoneNumber);
        $this->transferOnZeroToPhoneNumber->setName('transferOnZeroToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $transferOnZeroToPhoneNumber
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return ($this->transferOnZeroToPhoneNumber) ? $this->transferOnZeroToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber) ? $this->transferPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setRerouteOutboundCalls($rerouteOutboundCalls = null)
    {
        $this->rerouteOutboundCalls = new PrimitiveType($rerouteOutboundCalls);
        $this->rerouteOutboundCalls->setName('rerouteOutboundCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $rerouteOutboundCalls
     */
    public function getRerouteOutboundCalls()
    {
        return ($this->rerouteOutboundCalls) ? $this->rerouteOutboundCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setOutboundReroutePhoneNumber($outboundReroutePhoneNumber = null)
    {
        $this->outboundReroutePhoneNumber = ($outboundReroutePhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundReroutePhoneNumber
             : new OutgoingDNorSIPURI($outboundReroutePhoneNumber);
        $this->outboundReroutePhoneNumber->setName('outboundReroutePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $outboundReroutePhoneNumber
     */
    public function getOutboundReroutePhoneNumber()
    {
        return ($this->outboundReroutePhoneNumber) ? $this->outboundReroutePhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowOutboundLocalCalls($allowOutboundLocalCalls = null)
    {
        $this->allowOutboundLocalCalls = new PrimitiveType($allowOutboundLocalCalls);
        $this->allowOutboundLocalCalls->setName('allowOutboundLocalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowOutboundLocalCalls
     */
    public function getAllowOutboundLocalCalls()
    {
        return ($this->allowOutboundLocalCalls) ? $this->allowOutboundLocalCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setInboundCallMode($inboundCallMode = null)
    {
        $this->inboundCallMode = ($inboundCallMode InstanceOf InterceptInboundCall)
             ? $inboundCallMode
             : new InterceptInboundCall($inboundCallMode);
        $this->inboundCallMode->setName('inboundCallMode');
        return $this;
    }

    /**
     * 
     * @return InterceptInboundCall $inboundCallMode
     */
    public function getInboundCallMode()
    {
        return ($this->inboundCallMode) ? $this->inboundCallMode->getValue() : null;
    }

    /**
     * 
     */
    public function setAlternateBlockingAnnouncement($alternateBlockingAnnouncement = null)
    {
        $this->alternateBlockingAnnouncement = new PrimitiveType($alternateBlockingAnnouncement);
        $this->alternateBlockingAnnouncement->setName('alternateBlockingAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $alternateBlockingAnnouncement
     */
    public function getAlternateBlockingAnnouncement()
    {
        return ($this->alternateBlockingAnnouncement) ? $this->alternateBlockingAnnouncement->getValue() : null;
    }

    /**
     * 
     */
    public function setRouteToVoiceMail($routeToVoiceMail = null)
    {
        $this->routeToVoiceMail = new PrimitiveType($routeToVoiceMail);
        $this->routeToVoiceMail->setName('routeToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $routeToVoiceMail
     */
    public function getRouteToVoiceMail()
    {
        return ($this->routeToVoiceMail) ? $this->routeToVoiceMail->getValue() : null;
    }
}