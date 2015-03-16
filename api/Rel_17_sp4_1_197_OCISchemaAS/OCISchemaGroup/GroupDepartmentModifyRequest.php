<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a department of a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDepartmentModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupDepartmentModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $departmentName;
    protected $newDepartmentName;
    protected $newParentDepartmentKey;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $departmentName = '',
         $newDepartmentName = null,
         DepartmentKey $newParentDepartmentKey = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartmentName($departmentName);
        $this->setNewDepartmentName($newDepartmentName);
        $this->setNewParentDepartmentKey($newParentDepartmentKey);
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
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartmentName($departmentName = null)
    {
        $this->departmentName = ($departmentName InstanceOf DepartmentName)
             ? $departmentName
             : new DepartmentName($departmentName);
        $this->departmentName->setName('departmentName');
        return $this;
    }

    /**
     * 
     * @return DepartmentName $departmentName
     */
    public function getDepartmentName()
    {
        return ($this->departmentName) ? $this->departmentName->getValue() : null;
    }

    /**
     * 
     */
    public function setNewDepartmentName($newDepartmentName = null)
    {
        $this->newDepartmentName = ($newDepartmentName InstanceOf DepartmentName)
             ? $newDepartmentName
             : new DepartmentName($newDepartmentName);
        $this->newDepartmentName->setName('newDepartmentName');
        return $this;
    }

    /**
     * 
     * @return DepartmentName $newDepartmentName
     */
    public function getNewDepartmentName()
    {
        return ($this->newDepartmentName) ? $this->newDepartmentName->getValue() : null;
    }

    /**
     * 
     */
    public function setNewParentDepartmentKey(DepartmentKey $newParentDepartmentKey = null)
    {
        $this->newParentDepartmentKey = ($newParentDepartmentKey InstanceOf DepartmentKey)
             ? $newParentDepartmentKey
             : new DepartmentKey($newParentDepartmentKey);
        $this->newParentDepartmentKey->setName('newParentDepartmentKey');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $newParentDepartmentKey
     */
    public function getNewParentDepartmentKey()
    {
        return $this->newParentDepartmentKey;
    }
}