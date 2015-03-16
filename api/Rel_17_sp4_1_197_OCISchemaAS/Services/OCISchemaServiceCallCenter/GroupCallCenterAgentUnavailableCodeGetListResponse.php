<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterAgentUnavailableCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 */
class GroupCallCenterAgentUnavailableCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterAgentUnavailableCodeGetListResponse';
    protected $unavailableCodesTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterAgentUnavailableCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUnavailableCodesTable(TableType $unavailableCodesTable = null)
    {
        $this->unavailableCodesTable = $unavailableCodesTable;
        $this->unavailableCodesTable->setName('unavailableCodesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUnavailableCodesTable()
    {
        return $this->unavailableCodesTable;
    }
}