<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemRoamingNetworkGetListRequest.
 *         Contains a table with columns: "MSC Address", "Network Translation Index".
 */
class SystemRoamingNetworkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemRoamingNetworkGetListResponse';
    protected $roamingNetworkTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoamingNetworkGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoamingNetworkTable(TableType $roamingNetworkTable = null)
    {
        $this->roamingNetworkTable = $roamingNetworkTable;
        $this->roamingNetworkTable->setName('roamingNetworkTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRoamingNetworkTable()
    {
        return $this->roamingNetworkTable;
    }
}