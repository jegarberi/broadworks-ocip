<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of Simultaneous Ring numbers that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class SimultaneousRingReplacementNumberList extends ComplexType implements ComplexInterface
{
    public    $name = 'SimultaneousRingReplacementNumberList';
    protected $simultaneousRingNumber;

    public function __construct(
         $simultaneousRingNumber = null
    ) {
        $this->setSimultaneousRingNumber($simultaneousRingNumber);
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
    public function setSimultaneousRingNumber($simultaneousRingNumber = null)
    {
        $this->simultaneousRingNumber = new SimpleContent($simultaneousRingNumber);
        $this->simultaneousRingNumber->setName('simultaneousRingNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $simultaneousRingNumber
     */
    public function getSimultaneousRingNumber()
    {
        return ($this->simultaneousRingNumber) ? $this->simultaneousRingNumber->getValue() : null;
    }
}