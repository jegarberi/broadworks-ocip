<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a Communication Barring Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringCallTypeDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCommunicationBarringCallTypeDeleteRequest';
    protected $callType;

    public function __construct(
         $callType = ''
    ) {
        $this->setCallType($callType);
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
    public function setCallType($callType = null)
    {
        $this->callType = ($callType InstanceOf CommunicationBarringCallType)
             ? $callType
             : new CommunicationBarringCallType($callType);
        $this->callType->setName('callType');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCallType $callType
     */
    public function getCallType()
    {
        return ($this->callType) ? $this->callType->getValue() : null;
    }
}