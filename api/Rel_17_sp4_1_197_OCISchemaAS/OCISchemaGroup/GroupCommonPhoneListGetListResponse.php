<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhoneListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCommonPhoneListGetListRequest.
 *         The response contains the group's common phone list.
 */
class GroupCommonPhoneListGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCommonPhoneListGetListResponse';
    protected $entry;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommonPhoneListGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEntry(PhoneListEntry $entry = null)
    {
        $this->entry = ($entry InstanceOf PhoneListEntry)
             ? $entry
             : new PhoneListEntry($entry);
        $this->entry->setName('entry');
        return $this;
    }

    /**
     * 
     * @return PhoneListEntry $entry
     */
    public function getEntry()
    {
        return $this->entry;
    }
}