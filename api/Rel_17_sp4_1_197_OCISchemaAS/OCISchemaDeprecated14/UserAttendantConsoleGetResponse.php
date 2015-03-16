<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole\AttendantConsoleDisplayColumn;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserAttendantConsoleGetRequest.
 */
class UserAttendantConsoleGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserAttendantConsoleGetResponse';
    protected $launchOnLogin;
    protected $allowUserConfigCallDetails;
    protected $allowUserViewCallDetails;
    protected $displayColumn;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserAttendantConsoleGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLaunchOnLogin($launchOnLogin = null)
    {
        $this->launchOnLogin = new PrimitiveType($launchOnLogin);
        $this->launchOnLogin->setName('launchOnLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $launchOnLogin
     */
    public function getLaunchOnLogin()
    {
        return ($this->launchOnLogin) ? $this->launchOnLogin->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails = null)
    {
        $this->allowUserConfigCallDetails = new PrimitiveType($allowUserConfigCallDetails);
        $this->allowUserConfigCallDetails->setName('allowUserConfigCallDetails');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUserConfigCallDetails
     */
    public function getAllowUserConfigCallDetails()
    {
        return ($this->allowUserConfigCallDetails) ? $this->allowUserConfigCallDetails->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails = null)
    {
        $this->allowUserViewCallDetails = new PrimitiveType($allowUserViewCallDetails);
        $this->allowUserViewCallDetails->setName('allowUserViewCallDetails');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUserViewCallDetails
     */
    public function getAllowUserViewCallDetails()
    {
        return ($this->allowUserViewCallDetails) ? $this->allowUserViewCallDetails->getValue() : null;
    }

    /**
     * 
     */
    public function setDisplayColumn($displayColumn = null)
    {
        $this->displayColumn = ($displayColumn InstanceOf AttendantConsoleDisplayColumn)
             ? $displayColumn
             : new AttendantConsoleDisplayColumn($displayColumn);
        $this->displayColumn->setName('displayColumn');
        return $this;
    }

    /**
     * 
     * @return AttendantConsoleDisplayColumn $displayColumn
     */
    public function getDisplayColumn()
    {
        return ($this->displayColumn) ? $this->displayColumn->getValue() : null;
    }
}