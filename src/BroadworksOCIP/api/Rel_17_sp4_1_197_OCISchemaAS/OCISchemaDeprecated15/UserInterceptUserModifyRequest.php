<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's intercept user service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserInterceptUserModifyRequest16
 */
class UserInterceptUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInterceptUserModifyRequest';
    protected $userId;
    protected $isActive;
    protected $announcementSelection;
    protected $audioFile;
    protected $videoFile;
    protected $playNewPhoneNumber;
    protected $newPhoneNumber;
    protected $transferOnZeroToPhoneNumber;
    protected $transferPhoneNumber;

    public function __construct(
         $userId = '',
         $isActive = null,
         $announcementSelection = null,
         $audioFile = null,
         $videoFile = null,
         $playNewPhoneNumber = null,
         $newPhoneNumber = null,
         $transferOnZeroToPhoneNumber = null,
         $transferPhoneNumber = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setAnnouncementSelection($announcementSelection);
        $this->setAudioFile($audioFile);
        $this->setVideoFile($videoFile);
        $this->setPlayNewPhoneNumber($playNewPhoneNumber);
        $this->setNewPhoneNumber($newPhoneNumber);
        $this->setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber);
        $this->setTransferPhoneNumber($transferPhoneNumber);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAnnouncementSelection($announcementSelection = null)
    {
        $this->announcementSelection = ($announcementSelection InstanceOf AnnouncementSelection)
             ? $announcementSelection
             : new AnnouncementSelection($announcementSelection);
        $this->announcementSelection->setElementName('announcementSelection');
        return $this;
    }

    /**
     * 
     * @return AnnouncementSelection $announcementSelection
     */
    public function getAnnouncementSelection()
    {
        return ($this->announcementSelection)
            ? $this->announcementSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFile(LabeledFileResource $audioFile = null)
    {
        $this->audioFile = ($audioFile InstanceOf LabeledFileResource)
             ? $audioFile
             : new LabeledFileResource($audioFile);
        $this->audioFile->setElementName('audioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $audioFile
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * 
     */
    public function setVideoFile(LabeledFileResource $videoFile = null)
    {
        $this->videoFile = ($videoFile InstanceOf LabeledFileResource)
             ? $videoFile
             : new LabeledFileResource($videoFile);
        $this->videoFile->setElementName('videoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $videoFile
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
        $this->playNewPhoneNumber->setElementName('playNewPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $playNewPhoneNumber
     */
    public function getPlayNewPhoneNumber()
    {
        return ($this->playNewPhoneNumber)
            ? $this->playNewPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        $this->newPhoneNumber = ($newPhoneNumber InstanceOf DN)
             ? $newPhoneNumber
             : new DN($newPhoneNumber);
        $this->newPhoneNumber->setElementName('newPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $newPhoneNumber
     */
    public function getNewPhoneNumber()
    {
        return ($this->newPhoneNumber)
            ? $this->newPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        $this->transferOnZeroToPhoneNumber = new PrimitiveType($transferOnZeroToPhoneNumber);
        $this->transferOnZeroToPhoneNumber->setElementName('transferOnZeroToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $transferOnZeroToPhoneNumber
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return ($this->transferOnZeroToPhoneNumber)
            ? $this->transferOnZeroToPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
        $this->transferPhoneNumber->setElementName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber)
            ? $this->transferPhoneNumber->getElementValue()
            : null;
    }
}
