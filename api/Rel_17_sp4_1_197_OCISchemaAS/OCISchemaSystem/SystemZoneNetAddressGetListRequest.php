<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaZoneIPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Gets a list of IP Addresses and/or Ranges assigned to a zone.
 *         Response is SystemZoneNetAddressGetListResponse or an ErrorResponse.
 */
class SystemZoneNetAddressGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneNetAddressGetListResponse';
    public    $name = 'SystemZoneNetAddressGetListRequest';
    protected $zoneName;
    protected $responseSizeLimit;
    protected $searchCriteriaZoneIPAddress;

    public function __construct(
         $zoneName = '',
         $responseSizeLimit = null,
         SearchCriteriaZoneIPAddress $searchCriteriaZoneIPAddress = null
    ) {
        $this->setZoneName($zoneName);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaZoneIPAddress($searchCriteriaZoneIPAddress);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneNetAddressGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
        $this->zoneName->setName('zoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $zoneName
     */
    public function getZoneName()
    {
        return ($this->zoneName) ? $this->zoneName->getValue() : null;
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit) ? $this->responseSizeLimit->getValue() : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaZoneIPAddress(SearchCriteriaZoneIPAddress $searchCriteriaZoneIPAddress = null)
    {
        $this->searchCriteriaZoneIPAddress = ($searchCriteriaZoneIPAddress InstanceOf SearchCriteriaZoneIPAddress)
             ? $searchCriteriaZoneIPAddress
             : new SearchCriteriaZoneIPAddress($searchCriteriaZoneIPAddress);
        $this->searchCriteriaZoneIPAddress->setName('searchCriteriaZoneIPAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaZoneIPAddress $searchCriteriaZoneIPAddress
     */
    public function getSearchCriteriaZoneIPAddress()
    {
        return $this->searchCriteriaZoneIPAddress;
    }
}