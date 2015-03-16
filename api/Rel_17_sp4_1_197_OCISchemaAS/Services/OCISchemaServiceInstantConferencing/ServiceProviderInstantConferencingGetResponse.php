<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderInstantConferencingGetRequest.
 */
class ServiceProviderInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderInstantConferencingGetResponse';
    protected $portsAllocatedToServiceProvider;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\ServiceProviderInstantConferencingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPortsAllocatedToServiceProvider(UnboundedNonNegativeInt $portsAllocatedToServiceProvider = null)
    {
        $this->portsAllocatedToServiceProvider = ($portsAllocatedToServiceProvider InstanceOf UnboundedNonNegativeInt)
             ? $portsAllocatedToServiceProvider
             : new UnboundedNonNegativeInt($portsAllocatedToServiceProvider);
        $this->portsAllocatedToServiceProvider->setName('portsAllocatedToServiceProvider');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $portsAllocatedToServiceProvider
     */
    public function getPortsAllocatedToServiceProvider()
    {
        return $this->portsAllocatedToServiceProvider;
    }
}