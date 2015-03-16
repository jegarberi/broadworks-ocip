<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The call type criteria used within an add/get request.
 */
class SelectiveCallRejectionCriteriaCallType extends ComplexType implements ComplexInterface
{
    public    $name = 'SelectiveCallRejectionCriteriaCallType';
    protected $fromDnCriteriaSelection;
    protected $includeAnonymousCallers;
    protected $includeUnavailableCallers;
    protected $phoneNumber;

    public function __construct(
         $fromDnCriteriaSelection = '',
         $includeAnonymousCallers = '',
         $includeUnavailableCallers = '',
         $phoneNumber = null
    ) {
        $this->setFromDnCriteriaSelection($fromDnCriteriaSelection);
        $this->setIncludeAnonymousCallers($includeAnonymousCallers);
        $this->setIncludeUnavailableCallers($includeUnavailableCallers);
        $this->setPhoneNumber($phoneNumber);
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
    public function setFromDnCriteriaSelection($fromDnCriteriaSelection = null)
    {
        $this->fromDnCriteriaSelection = new SimpleContent($fromDnCriteriaSelection);
        $this->fromDnCriteriaSelection->setName('fromDnCriteriaSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fromDnCriteriaSelection
     */
    public function getFromDnCriteriaSelection()
    {
        return ($this->fromDnCriteriaSelection) ? $this->fromDnCriteriaSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeAnonymousCallers($includeAnonymousCallers = null)
    {
        $this->includeAnonymousCallers = new SimpleContent($includeAnonymousCallers);
        $this->includeAnonymousCallers->setName('includeAnonymousCallers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $includeAnonymousCallers
     */
    public function getIncludeAnonymousCallers()
    {
        return ($this->includeAnonymousCallers) ? $this->includeAnonymousCallers->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeUnavailableCallers($includeUnavailableCallers = null)
    {
        $this->includeUnavailableCallers = new SimpleContent($includeUnavailableCallers);
        $this->includeUnavailableCallers->setName('includeUnavailableCallers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $includeUnavailableCallers
     */
    public function getIncludeUnavailableCallers()
    {
        return ($this->includeUnavailableCallers) ? $this->includeUnavailableCallers->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }
}