<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a home zone from the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerDeleteHomeZoneRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseBroadWorksMobileManagerDeleteHomeZoneRequest';
    protected $serviceProviderId;
    protected $homeZoneId;

    public function __construct(
         $serviceProviderId = '',
         $homeZoneId = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setHomeZoneId($homeZoneId);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setHomeZoneId($homeZoneId = null)
    {
        $this->homeZoneId = new PrimitiveType($homeZoneId);
        $this->homeZoneId->setName('homeZoneId');
        return $this;
    }

    /**
     * 
     * @return string $homeZoneId
     */
    public function getHomeZoneId()
    {
        return ($this->homeZoneId) ? $this->homeZoneId->getValue() : null;
    }
}