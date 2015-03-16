<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactVirtualOnNetCallTypeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExtension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the list of Virtual On-Net users in an Enterprise.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a  EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse or 
 *         an ErrorResponse.
 */
class EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse';
    public    $name = 'EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest';
    protected $serviceProviderId;
    protected $responseSizeLimit;
    protected $searchCriteriaUserLastName;
    protected $searchCriteriaUserFirstName;
    protected $searchCriteriaDn;
    protected $searchCriteriaGroupLocationCode;
    protected $searchCriteriaExtension;
    protected $searchCriteriaExactVirtualOnNetCallTypeName;

    public function __construct(
         $serviceProviderId = '',
         $responseSizeLimit = null,
         SearchCriteriaUserLastName $searchCriteriaUserLastName = null,
         SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null,
         SearchCriteriaDn $searchCriteriaDn = null,
         SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null,
         SearchCriteriaExtension $searchCriteriaExtension = null,
         SearchCriteriaExactVirtualOnNetCallTypeName $searchCriteriaExactVirtualOnNetCallTypeName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->setSearchCriteriaExtension($searchCriteriaExtension);
        $this->setSearchCriteriaExactVirtualOnNetCallTypeName($searchCriteriaExactVirtualOnNetCallTypeName);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
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
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName = ($searchCriteriaUserLastName InstanceOf SearchCriteriaUserLastName)
             ? $searchCriteriaUserLastName
             : new SearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->searchCriteriaUserLastName->setName('searchCriteriaUserLastName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserLastName $searchCriteriaUserLastName
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        $this->searchCriteriaUserFirstName = ($searchCriteriaUserFirstName InstanceOf SearchCriteriaUserFirstName)
             ? $searchCriteriaUserFirstName
             : new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->searchCriteriaUserFirstName->setName('searchCriteriaUserFirstName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * 
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        $this->searchCriteriaDn = ($searchCriteriaDn InstanceOf SearchCriteriaDn)
             ? $searchCriteriaDn
             : new SearchCriteriaDn($searchCriteriaDn);
        $this->searchCriteriaDn->setName('searchCriteriaDn');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDn $searchCriteriaDn
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupLocationCode(SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode = null)
    {
        $this->searchCriteriaGroupLocationCode = ($searchCriteriaGroupLocationCode InstanceOf SearchCriteriaGroupLocationCode)
             ? $searchCriteriaGroupLocationCode
             : new SearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode);
        $this->searchCriteriaGroupLocationCode->setName('searchCriteriaGroupLocationCode');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return $this->searchCriteriaGroupLocationCode;
    }

    /**
     * 
     */
    public function setSearchCriteriaExtension(SearchCriteriaExtension $searchCriteriaExtension = null)
    {
        $this->searchCriteriaExtension = ($searchCriteriaExtension InstanceOf SearchCriteriaExtension)
             ? $searchCriteriaExtension
             : new SearchCriteriaExtension($searchCriteriaExtension);
        $this->searchCriteriaExtension->setName('searchCriteriaExtension');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExtension $searchCriteriaExtension
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactVirtualOnNetCallTypeName(SearchCriteriaExactVirtualOnNetCallTypeName $searchCriteriaExactVirtualOnNetCallTypeName = null)
    {
        $this->searchCriteriaExactVirtualOnNetCallTypeName = ($searchCriteriaExactVirtualOnNetCallTypeName InstanceOf SearchCriteriaExactVirtualOnNetCallTypeName)
             ? $searchCriteriaExactVirtualOnNetCallTypeName
             : new SearchCriteriaExactVirtualOnNetCallTypeName($searchCriteriaExactVirtualOnNetCallTypeName);
        $this->searchCriteriaExactVirtualOnNetCallTypeName->setName('searchCriteriaExactVirtualOnNetCallTypeName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactVirtualOnNetCallTypeName $searchCriteriaExactVirtualOnNetCallTypeName
     */
    public function getSearchCriteriaExactVirtualOnNetCallTypeName()
    {
        return $this->searchCriteriaExactVirtualOnNetCallTypeName;
    }
}