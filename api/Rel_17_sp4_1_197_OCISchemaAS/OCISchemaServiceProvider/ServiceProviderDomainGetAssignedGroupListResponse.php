<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderDomainGetAssignedGroupListRequest.
 *         Contains a table with column headings: "Group Id", "Group Name"
 *         and a row for each group.
 */
class ServiceProviderDomainGetAssignedGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderDomainGetAssignedGroupListResponse';
    protected $groupTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDomainGetAssignedGroupListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupTable(TableType $groupTable = null)
    {
        $this->groupTable = $groupTable;
        $this->groupTable->setName('groupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupTable()
    {
        return $this->groupTable;
    }
}