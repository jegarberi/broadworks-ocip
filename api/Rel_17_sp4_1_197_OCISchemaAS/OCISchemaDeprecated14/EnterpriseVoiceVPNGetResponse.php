<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNNonMatchingE164NumberSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDefaultSelection;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to EnterpriseVoiceVPNGetRequest.
 *         Replaced By: EnterpriseVoiceVPNGetResponse14sp3
 */
class EnterpriseVoiceVPNGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseVoiceVPNGetResponse';
    protected $isActive;
    protected $defaultSelection;
    protected $e164Selection;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\EnterpriseVoiceVPNGetResponse $response
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
    public function setDefaultSelection($defaultSelection = null)
    {
        $this->defaultSelection = ($defaultSelection InstanceOf EnterpriseVoiceVPNDefaultSelection)
             ? $defaultSelection
             : new EnterpriseVoiceVPNDefaultSelection($defaultSelection);
        $this->defaultSelection->setName('defaultSelection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDefaultSelection $defaultSelection
     */
    public function getDefaultSelection()
    {
        return ($this->defaultSelection) ? $this->defaultSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setE164Selection($e164Selection = null)
    {
        $this->e164Selection = ($e164Selection InstanceOf EnterpriseVoiceVPNNonMatchingE164NumberSelection)
             ? $e164Selection
             : new EnterpriseVoiceVPNNonMatchingE164NumberSelection($e164Selection);
        $this->e164Selection->setName('e164Selection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNNonMatchingE164NumberSelection $e164Selection
     */
    public function getE164Selection()
    {
        return ($this->e164Selection) ? $this->e164Selection->getValue() : null;
    }
}