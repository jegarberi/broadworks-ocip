<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express Available In Office Configuration used in the context of a modify.
 */
class CommPilotExpressBusyModify extends ComplexType implements ComplexInterface
{
    public    $name = 'CommPilotExpressBusyModify';
    protected $incomingCalls;
    protected $voiceMailNotify;

    public function __construct(
         $incomingCalls = null,
         $voiceMailNotify = null
    ) {
        $this->setIncomingCalls($incomingCalls);
        $this->setVoiceMailNotify($voiceMailNotify);
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
    public function setIncomingCalls($incomingCalls = null)
    {
        $this->incomingCalls = new SimpleContent($incomingCalls);
        $this->incomingCalls->setName('incomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $incomingCalls
     */
    public function getIncomingCalls()
    {
        return ($this->incomingCalls) ? $this->incomingCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setVoiceMailNotify($voiceMailNotify = null)
    {
        $this->voiceMailNotify = new SimpleContent($voiceMailNotify);
        $this->voiceMailNotify->setName('voiceMailNotify');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $voiceMailNotify
     */
    public function getVoiceMailNotify()
    {
        return ($this->voiceMailNotify) ? $this->voiceMailNotify->getValue() : null;
    }
}