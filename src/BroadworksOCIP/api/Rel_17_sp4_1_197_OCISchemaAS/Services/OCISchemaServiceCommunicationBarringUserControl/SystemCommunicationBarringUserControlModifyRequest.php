<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\CommunicationBarringUserControlNumberOfAttempts;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\CommunicationBarringUserControlLockoutMinutes;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies the system's Communication Barring User-Control settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCommunicationBarringUserControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringUserControlModifyRequest';
    protected $enableLockout;
    protected $maxNumberOfFailedAttempts;
    protected $lockoutMinutes;

    public function __construct(
         $enableLockout = null,
         $maxNumberOfFailedAttempts = null,
         $lockoutMinutes = null
    ) {
        $this->setEnableLockout($enableLockout);
        $this->setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts);
        $this->setLockoutMinutes($lockoutMinutes);
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
    public function setEnableLockout($enableLockout = null)
    {
        $this->enableLockout = new PrimitiveType($enableLockout);
        $this->enableLockout->setElementName('enableLockout');
        return $this;
    }

    /**
     * 
     * @return boolean $enableLockout
     */
    public function getEnableLockout()
    {
        return ($this->enableLockout)
            ? $this->enableLockout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts = null)
    {
        $this->maxNumberOfFailedAttempts = ($maxNumberOfFailedAttempts InstanceOf CommunicationBarringUserControlNumberOfAttempts)
             ? $maxNumberOfFailedAttempts
             : new CommunicationBarringUserControlNumberOfAttempts($maxNumberOfFailedAttempts);
        $this->maxNumberOfFailedAttempts->setElementName('maxNumberOfFailedAttempts');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringUserControlNumberOfAttempts $maxNumberOfFailedAttempts
     */
    public function getMaxNumberOfFailedAttempts()
    {
        return ($this->maxNumberOfFailedAttempts)
            ? $this->maxNumberOfFailedAttempts->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLockoutMinutes($lockoutMinutes = null)
    {
        $this->lockoutMinutes = ($lockoutMinutes InstanceOf CommunicationBarringUserControlLockoutMinutes)
             ? $lockoutMinutes
             : new CommunicationBarringUserControlLockoutMinutes($lockoutMinutes);
        $this->lockoutMinutes->setElementName('lockoutMinutes');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringUserControlLockoutMinutes $lockoutMinutes
     */
    public function getLockoutMinutes()
    {
        return ($this->lockoutMinutes)
            ? $this->lockoutMinutes->getElementValue()
            : null;
    }
}
