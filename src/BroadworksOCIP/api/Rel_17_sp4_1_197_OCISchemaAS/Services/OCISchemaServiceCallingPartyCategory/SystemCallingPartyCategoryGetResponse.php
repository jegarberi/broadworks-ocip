<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\ISDNUserPartOriginatingLineInformationValue;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\ISDNGenericTransparencyDescriptorOliValue;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\CallingPartyCategoryValue;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\WebDisplayKey;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallingPartyCategoryGetRequest.
 *         Contains information of a Calling Party Category defined in system.
 */
class SystemCallingPartyCategoryGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallingPartyCategoryGetResponse';
    protected $cpcValue;
    protected $isupOliValue;
    protected $gtdOliValue;
    protected $userCategory;
    protected $payPhone;
    protected $operator;
    protected $default;
    protected $collectCall;
    protected $webDisplayKey;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCpcValue($cpcValue = null)
    {
        $this->cpcValue = ($cpcValue InstanceOf CallingPartyCategoryValue)
             ? $cpcValue
             : new CallingPartyCategoryValue($cpcValue);
        $this->cpcValue->setElementName('cpcValue');
        return $this;
    }

    /**
     * 
     * @return CallingPartyCategoryValue $cpcValue
     */
    public function getCpcValue()
    {
        return ($this->cpcValue)
            ? $this->cpcValue->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsupOliValue($isupOliValue = null)
    {
        $this->isupOliValue = ($isupOliValue InstanceOf ISDNUserPartOriginatingLineInformationValue)
             ? $isupOliValue
             : new ISDNUserPartOriginatingLineInformationValue($isupOliValue);
        $this->isupOliValue->setElementName('isupOliValue');
        return $this;
    }

    /**
     * 
     * @return ISDNUserPartOriginatingLineInformationValue $isupOliValue
     */
    public function getIsupOliValue()
    {
        return ($this->isupOliValue)
            ? $this->isupOliValue->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGtdOliValue($gtdOliValue = null)
    {
        $this->gtdOliValue = ($gtdOliValue InstanceOf ISDNGenericTransparencyDescriptorOliValue)
             ? $gtdOliValue
             : new ISDNGenericTransparencyDescriptorOliValue($gtdOliValue);
        $this->gtdOliValue->setElementName('gtdOliValue');
        return $this;
    }

    /**
     * 
     * @return ISDNGenericTransparencyDescriptorOliValue $gtdOliValue
     */
    public function getGtdOliValue()
    {
        return ($this->gtdOliValue)
            ? $this->gtdOliValue->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserCategory($userCategory = null)
    {
        $this->userCategory = new PrimitiveType($userCategory);
        $this->userCategory->setElementName('userCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $userCategory
     */
    public function getUserCategory()
    {
        return ($this->userCategory)
            ? $this->userCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPayPhone($payPhone = null)
    {
        $this->payPhone = new PrimitiveType($payPhone);
        $this->payPhone->setElementName('payPhone');
        return $this;
    }

    /**
     * 
     * @return boolean $payPhone
     */
    public function getPayPhone()
    {
        return ($this->payPhone)
            ? $this->payPhone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOperator($operator = null)
    {
        $this->operator = new PrimitiveType($operator);
        $this->operator->setElementName('operator');
        return $this;
    }

    /**
     * 
     * @return boolean $operator
     */
    public function getOperator()
    {
        return ($this->operator)
            ? $this->operator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefault($default = null)
    {
        $this->default = new PrimitiveType($default);
        $this->default->setElementName('default');
        return $this;
    }

    /**
     * 
     * @return boolean $default
     */
    public function getDefault()
    {
        return ($this->default)
            ? $this->default->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCollectCall($collectCall = null)
    {
        $this->collectCall = new PrimitiveType($collectCall);
        $this->collectCall->setElementName('collectCall');
        return $this;
    }

    /**
     * 
     * @return boolean $collectCall
     */
    public function getCollectCall()
    {
        return ($this->collectCall)
            ? $this->collectCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWebDisplayKey($webDisplayKey = null)
    {
        $this->webDisplayKey = ($webDisplayKey InstanceOf WebDisplayKey)
             ? $webDisplayKey
             : new WebDisplayKey($webDisplayKey);
        $this->webDisplayKey->setElementName('webDisplayKey');
        return $this;
    }

    /**
     * 
     * @return WebDisplayKey $webDisplayKey
     */
    public function getWebDisplayKey()
    {
        return ($this->webDisplayKey)
            ? $this->webDisplayKey->getElementValue()
            : null;
    }
}
