<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkACLEntryDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPACLTransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an entry from the SIP access control list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPModifyACLEntryRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemSIPModifyACLEntryRequest';
    protected $netAddress;
    protected $transportProtocol;
    protected $description;

    public function __construct(
         $netAddress = '',
         $transportProtocol = null,
         $description = null
    ) {
        $this->setNetAddress($netAddress);
        $this->setTransportProtocol($transportProtocol);
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
    public function setTransportProtocol($transportProtocol = null)
    {
        $this->transportProtocol = ($transportProtocol InstanceOf SIPACLTransportProtocol)
             ? $transportProtocol
             : new SIPACLTransportProtocol($transportProtocol);
        $this->transportProtocol->setName('transportProtocol');
        return $this;
    }

    /**
     * 
     * @return SIPACLTransportProtocol $transportProtocol
     */
    public function getTransportProtocol()
    {
        return ($this->transportProtocol) ? $this->transportProtocol->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf NetworkACLEntryDescription)
             ? $description
             : new NetworkACLEntryDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return NetworkACLEntryDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}