<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for a system Roaming Network Msc Address.
 */
class SearchCriteriaRoamingMscAddress extends ComplexType implements ComplexInterface
{
    public    $name = 'SearchCriteriaRoamingMscAddress';
    protected $mode;
    protected $value;
    protected $isCaseInsensitive;

    public function __construct(
         $mode = '',
         $value = '',
         $isCaseInsensitive = ''
    ) {
        $this->setMode($mode);
        $this->setValue($value);
        $this->setIsCaseInsensitive($isCaseInsensitive);
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
    public function setMode($mode = null)
    {
        $this->mode = ($mode InstanceOf SearchMode)
             ? $mode
             : new SearchMode($mode);
        $this->mode->setName('mode');
        return $this;
    }

    /**
     * 
     * @return SearchMode $mode
     */
    public function getMode()
    {
        return ($this->mode) ? $this->mode->getValue() : null;
    }

    /**
     * 
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf DN)
             ? $value
             : new DN($value);
        $this->value->setName('value');
        return $this;
    }

    /**
     * 
     * @return DN $value
     */
    public function getValue()
    {
        return ($this->value) ? $this->value->getValue() : null;
    }

    /**
     * 
     */
    public function setIsCaseInsensitive($isCaseInsensitive = null)
    {
        $this->isCaseInsensitive = new PrimitiveType($isCaseInsensitive);
        $this->isCaseInsensitive->setName('isCaseInsensitive');
        return $this;
    }

    /**
     * 
     * @return boolean $isCaseInsensitive
     */
    public function getIsCaseInsensitive()
    {
        return ($this->isCaseInsensitive) ? $this->isCaseInsensitive->getValue() : null;
    }
}