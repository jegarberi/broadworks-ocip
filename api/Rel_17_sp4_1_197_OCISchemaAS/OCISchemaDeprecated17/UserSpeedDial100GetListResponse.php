<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\SpeedDial100Entry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDialPrefix;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSpeedDial100GetListRequest.
 */
class UserSpeedDial100GetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserSpeedDial100GetListResponse';
    protected $prefix;
    protected $speedDialEntry;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserSpeedDial100GetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPrefix($prefix = null)
    {
        $this->prefix = ($prefix InstanceOf SpeedDialPrefix)
             ? $prefix
             : new SpeedDialPrefix($prefix);
        $this->prefix->setName('prefix');
        return $this;
    }

    /**
     * 
     * @return SpeedDialPrefix $prefix
     */
    public function getPrefix()
    {
        return ($this->prefix) ? $this->prefix->getValue() : null;
    }

    /**
     * 
     */
    public function setSpeedDialEntry(SpeedDial100Entry $speedDialEntry = null)
    {
        $this->speedDialEntry = ($speedDialEntry InstanceOf SpeedDial100Entry)
             ? $speedDialEntry
             : new SpeedDial100Entry($speedDialEntry);
        $this->speedDialEntry->setName('speedDialEntry');
        return $this;
    }

    /**
     * 
     * @return SpeedDial100Entry $speedDialEntry
     */
    public function getSpeedDialEntry()
    {
        return $this->speedDialEntry;
    }
}