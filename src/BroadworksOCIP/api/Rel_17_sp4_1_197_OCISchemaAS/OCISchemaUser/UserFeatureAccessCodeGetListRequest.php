<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the list of feature access codes for a user.
 *         The response is either a UserFeatureAccessCodeGetListResponse or an ErrorResponse.
 */
class UserFeatureAccessCodeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserFeatureAccessCodeGetListResponse';
    public    $elementName = 'UserFeatureAccessCodeGetListRequest';
    protected $userId;

    public function __construct(
         $userId = ''
    ) {
        $this->setUserId($userId);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserFeatureAccessCodeGetListResponse $response
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
}
