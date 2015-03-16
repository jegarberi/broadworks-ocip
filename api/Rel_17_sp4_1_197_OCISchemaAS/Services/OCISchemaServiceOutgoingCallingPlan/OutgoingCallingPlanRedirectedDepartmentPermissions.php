<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Outgoing Calling Plan being forwarded/transferred permissions for a department.
 */
class OutgoingCallingPlanRedirectedDepartmentPermissions extends ComplexType implements ComplexInterface
{
    public    $name = 'OutgoingCallingPlanRedirectedDepartmentPermissions';
    protected $departmentKey;
    protected $departmentName;
    protected $permissions;

    public function __construct(
         $departmentKey = '',
         $departmentName = '',
         $permissions = ''
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setDepartmentName($departmentName);
        $this->setPermissions($permissions);
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
    public function setDepartmentKey($departmentKey = null)
    {
        $this->departmentKey = new SimpleContent($departmentKey);
        $this->departmentKey->setName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentKey
     */
    public function getDepartmentKey()
    {
        return ($this->departmentKey) ? $this->departmentKey->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartmentName($departmentName = null)
    {
        $this->departmentName = new SimpleContent($departmentName);
        $this->departmentName->setName('departmentName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentName
     */
    public function getDepartmentName()
    {
        return ($this->departmentName) ? $this->departmentName->getValue() : null;
    }

    /**
     * 
     */
    public function setPermissions($permissions = null)
    {
        $this->permissions = new SimpleContent($permissions);
        $this->permissions->setName('permissions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $permissions
     */
    public function getPermissions()
    {
        return ($this->permissions) ? $this->permissions->getValue() : null;
    }
}