<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSelectiveCallRejectionGetCriteriaRequest.
 */
class UserSelectiveCallRejectionGetCriteriaResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserSelectiveCallRejectionGetCriteriaResponse';
    protected $timeSchedule;
    protected $fromDnCriteria;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserSelectiveCallRejectionGetCriteriaResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule = ($timeSchedule InstanceOf TimeSchedule)
             ? $timeSchedule
             : new TimeSchedule($timeSchedule);
        $this->timeSchedule->setName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule $timeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * 
     */
    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
        $this->fromDnCriteria = ($fromDnCriteria InstanceOf CriteriaFromDn)
             ? $fromDnCriteria
             : new CriteriaFromDn($fromDnCriteria);
        $this->fromDnCriteria->setName('fromDnCriteria');
        return $this;
    }

    /**
     * 
     * @return CriteriaFromDn $fromDnCriteria
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }
}