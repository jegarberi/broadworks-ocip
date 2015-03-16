<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a Route Point Call Disposition Code.
 *         The response is either GroupRoutePointQueueCallDispositionCodeGetResponse or ErrorResponse.
 */
class GroupRoutePointQueueCallDispositionCodeGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointQueueCallDispositionCodeGetResponse';
    public    $name = 'GroupRoutePointQueueCallDispositionCodeGetRequest';
    protected $serviceUserId;
    protected $code;

    public function __construct(
         $serviceUserId = '',
         $code = ''
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setCode($code);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointQueueCallDispositionCodeGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setCode($code = null)
    {
        $this->code = ($code InstanceOf CallDispositionCode)
             ? $code
             : new CallDispositionCode($code);
        $this->code->setName('code');
        return $this;
    }

    /**
     * 
     * @return CallDispositionCode $code
     */
    public function getCode()
    {
        return ($this->code) ? $this->code->getValue() : null;
    }
}