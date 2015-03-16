<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDoNotDisturb; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserDoNotDisturbGetRequest.
 */
class UserDoNotDisturbGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserDoNotDisturbGetResponse';
    protected $isActive;
    protected $ringSplash;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDoNotDisturb\UserDoNotDisturbGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setRingSplash($ringSplash = null)
    {
        $this->ringSplash = new PrimitiveType($ringSplash);
        $this->ringSplash->setName('ringSplash');
        return $this;
    }

    /**
     * 
     * @return boolean $ringSplash
     */
    public function getRingSplash()
    {
        return ($this->ringSplash) ? $this->ringSplash->getValue() : null;
    }
}