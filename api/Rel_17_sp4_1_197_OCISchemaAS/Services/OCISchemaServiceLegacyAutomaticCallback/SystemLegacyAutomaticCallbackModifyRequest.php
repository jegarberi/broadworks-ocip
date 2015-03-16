<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackMaxMonitorsPerTerminator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackTRingSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT10TMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT10OMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT8Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT6Minutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT2Minutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT4Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT5Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT7Minutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system's legacy automatic callback attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLegacyAutomaticCallbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemLegacyAutomaticCallbackModifyRequest';
    protected $maxMonitorsPerOriginator;
    protected $maxMonitorsPerTerminator;
    protected $t2Minutes;
    protected $t4Seconds;
    protected $t5Seconds;
    protected $t6Minutes;
    protected $t7Minutes;
    protected $t8Seconds;
    protected $tRingSeconds;
    protected $t10OMinutes;
    protected $t10TMinutes;

    public function __construct(
         $maxMonitorsPerOriginator = null,
         $maxMonitorsPerTerminator = null,
         $t2Minutes = null,
         $t4Seconds = null,
         $t5Seconds = null,
         $t6Minutes = null,
         $t7Minutes = null,
         $t8Seconds = null,
         $tRingSeconds = null,
         $t10OMinutes = null,
         $t10TMinutes = null
    ) {
        $this->setMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->setMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
        $this->setT2Minutes($t2Minutes);
        $this->setT4Seconds($t4Seconds);
        $this->setT5Seconds($t5Seconds);
        $this->setT6Minutes($t6Minutes);
        $this->setT7Minutes($t7Minutes);
        $this->setT8Seconds($t8Seconds);
        $this->setTRingSeconds($tRingSeconds);
        $this->setT10OMinutes($t10OMinutes);
        $this->setT10TMinutes($t10TMinutes);
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
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator = null)
    {
        $this->maxMonitorsPerOriginator = ($maxMonitorsPerOriginator InstanceOf LegacyAutomaticCallbackMaxMonitorsPerOriginator)
             ? $maxMonitorsPerOriginator
             : new LegacyAutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->maxMonitorsPerOriginator->setName('maxMonitorsPerOriginator');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackMaxMonitorsPerOriginator $maxMonitorsPerOriginator
     */
    public function getMaxMonitorsPerOriginator()
    {
        return ($this->maxMonitorsPerOriginator) ? $this->maxMonitorsPerOriginator->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator = null)
    {
        $this->maxMonitorsPerTerminator = ($maxMonitorsPerTerminator InstanceOf LegacyAutomaticCallbackMaxMonitorsPerTerminator)
             ? $maxMonitorsPerTerminator
             : new LegacyAutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
        $this->maxMonitorsPerTerminator->setName('maxMonitorsPerTerminator');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackMaxMonitorsPerTerminator $maxMonitorsPerTerminator
     */
    public function getMaxMonitorsPerTerminator()
    {
        return ($this->maxMonitorsPerTerminator) ? $this->maxMonitorsPerTerminator->getValue() : null;
    }

    /**
     * 
     */
    public function setT2Minutes($t2Minutes = null)
    {
        $this->t2Minutes = ($t2Minutes InstanceOf LegacyAutomaticCallbackT2Minutes)
             ? $t2Minutes
             : new LegacyAutomaticCallbackT2Minutes($t2Minutes);
        $this->t2Minutes->setName('t2Minutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT2Minutes $t2Minutes
     */
    public function getT2Minutes()
    {
        return ($this->t2Minutes) ? $this->t2Minutes->getValue() : null;
    }

    /**
     * 
     */
    public function setT4Seconds($t4Seconds = null)
    {
        $this->t4Seconds = ($t4Seconds InstanceOf LegacyAutomaticCallbackT4Seconds)
             ? $t4Seconds
             : new LegacyAutomaticCallbackT4Seconds($t4Seconds);
        $this->t4Seconds->setName('t4Seconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT4Seconds $t4Seconds
     */
    public function getT4Seconds()
    {
        return ($this->t4Seconds) ? $this->t4Seconds->getValue() : null;
    }

    /**
     * 
     */
    public function setT5Seconds($t5Seconds = null)
    {
        $this->t5Seconds = ($t5Seconds InstanceOf LegacyAutomaticCallbackT5Seconds)
             ? $t5Seconds
             : new LegacyAutomaticCallbackT5Seconds($t5Seconds);
        $this->t5Seconds->setName('t5Seconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT5Seconds $t5Seconds
     */
    public function getT5Seconds()
    {
        return ($this->t5Seconds) ? $this->t5Seconds->getValue() : null;
    }

    /**
     * 
     */
    public function setT6Minutes($t6Minutes = null)
    {
        $this->t6Minutes = ($t6Minutes InstanceOf LegacyAutomaticCallbackT6Minutes)
             ? $t6Minutes
             : new LegacyAutomaticCallbackT6Minutes($t6Minutes);
        $this->t6Minutes->setName('t6Minutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT6Minutes $t6Minutes
     */
    public function getT6Minutes()
    {
        return ($this->t6Minutes) ? $this->t6Minutes->getValue() : null;
    }

    /**
     * 
     */
    public function setT7Minutes($t7Minutes = null)
    {
        $this->t7Minutes = ($t7Minutes InstanceOf LegacyAutomaticCallbackT7Minutes)
             ? $t7Minutes
             : new LegacyAutomaticCallbackT7Minutes($t7Minutes);
        $this->t7Minutes->setName('t7Minutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT7Minutes $t7Minutes
     */
    public function getT7Minutes()
    {
        return ($this->t7Minutes) ? $this->t7Minutes->getValue() : null;
    }

    /**
     * 
     */
    public function setT8Seconds($t8Seconds = null)
    {
        $this->t8Seconds = ($t8Seconds InstanceOf LegacyAutomaticCallbackT8Seconds)
             ? $t8Seconds
             : new LegacyAutomaticCallbackT8Seconds($t8Seconds);
        $this->t8Seconds->setName('t8Seconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT8Seconds $t8Seconds
     */
    public function getT8Seconds()
    {
        return ($this->t8Seconds) ? $this->t8Seconds->getValue() : null;
    }

    /**
     * 
     */
    public function setTRingSeconds($tRingSeconds = null)
    {
        $this->tRingSeconds = ($tRingSeconds InstanceOf LegacyAutomaticCallbackTRingSeconds)
             ? $tRingSeconds
             : new LegacyAutomaticCallbackTRingSeconds($tRingSeconds);
        $this->tRingSeconds->setName('tRingSeconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackTRingSeconds $tRingSeconds
     */
    public function getTRingSeconds()
    {
        return ($this->tRingSeconds) ? $this->tRingSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setT10OMinutes($t10OMinutes = null)
    {
        $this->t10OMinutes = ($t10OMinutes InstanceOf LegacyAutomaticCallbackT10OMinutes)
             ? $t10OMinutes
             : new LegacyAutomaticCallbackT10OMinutes($t10OMinutes);
        $this->t10OMinutes->setName('t10OMinutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT10OMinutes $t10OMinutes
     */
    public function getT10OMinutes()
    {
        return ($this->t10OMinutes) ? $this->t10OMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setT10TMinutes($t10TMinutes = null)
    {
        $this->t10TMinutes = ($t10TMinutes InstanceOf LegacyAutomaticCallbackT10TMinutes)
             ? $t10TMinutes
             : new LegacyAutomaticCallbackT10TMinutes($t10TMinutes);
        $this->t10TMinutes->setName('t10TMinutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT10TMinutes $t10TMinutes
     */
    public function getT10TMinutes()
    {
        return ($this->t10TMinutes) ? $this->t10TMinutes->getValue() : null;
    }
}