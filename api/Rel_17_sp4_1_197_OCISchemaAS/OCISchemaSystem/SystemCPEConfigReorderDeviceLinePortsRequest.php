<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Reorder the lines of a System device. You can not add or delete line ports, only
 *         re-ordering the list is allowed. The ordered list of line ports can be obtained
 *         with the SystemAccessDeviceGetRequest command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCPEConfigReorderDeviceLinePortsRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCPEConfigReorderDeviceLinePortsRequest';
    protected $deviceName;
    protected $orderedLinePortList;

    public function __construct(
         $deviceName = '',
         $orderedLinePortList = null
    ) {
        $this->setDeviceName($deviceName);
        $this->setOrderedLinePortList($orderedLinePortList);
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
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName) ? $this->deviceName->getValue() : null;
    }

    /**
     * 
     */
    public function setOrderedLinePortList($orderedLinePortList = null)
    {
        $this->orderedLinePortList = ($orderedLinePortList InstanceOf AccessDeviceEndpointLinePort)
             ? $orderedLinePortList
             : new AccessDeviceEndpointLinePort($orderedLinePortList);
        $this->orderedLinePortList->setName('orderedLinePortList');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointLinePort $orderedLinePortList
     */
    public function getOrderedLinePortList()
    {
        return ($this->orderedLinePortList) ? $this->orderedLinePortList->getValue() : null;
    }
}