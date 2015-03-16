<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The parts of a user's display name that a client can display in whatever way is appropriate
 *         for the client application.
 */
class UserDisplayNames extends ComplexType implements ComplexInterface
{
    public    $name = 'UserDisplayNames';
    protected $lastName;
    protected $firstName;
    protected $hiraganaLastName;
    protected $hiraganaFirstName;

    public function __construct(
         $lastName = '',
         $firstName = '',
         $hiraganaLastName = null,
         $hiraganaFirstName = null
    ) {
        $this->setLastName($lastName);
        $this->setFirstName($firstName);
        $this->setHiraganaLastName($hiraganaLastName);
        $this->setHiraganaFirstName($hiraganaFirstName);
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
    public function setLastName($lastName = null)
    {
        $this->lastName = new SimpleContent($lastName);
        $this->lastName->setName('lastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $lastName
     */
    public function getLastName()
    {
        return ($this->lastName) ? $this->lastName->getValue() : null;
    }

    /**
     * 
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = new SimpleContent($firstName);
        $this->firstName->setName('firstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $firstName
     */
    public function getFirstName()
    {
        return ($this->firstName) ? $this->firstName->getValue() : null;
    }

    /**
     * 
     */
    public function setHiraganaLastName($hiraganaLastName = null)
    {
        $this->hiraganaLastName = new SimpleContent($hiraganaLastName);
        $this->hiraganaLastName->setName('hiraganaLastName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hiraganaLastName
     */
    public function getHiraganaLastName()
    {
        return ($this->hiraganaLastName) ? $this->hiraganaLastName->getValue() : null;
    }

    /**
     * 
     */
    public function setHiraganaFirstName($hiraganaFirstName = null)
    {
        $this->hiraganaFirstName = new SimpleContent($hiraganaFirstName);
        $this->hiraganaFirstName->setName('hiraganaFirstName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hiraganaFirstName
     */
    public function getHiraganaFirstName()
    {
        return ($this->hiraganaFirstName) ? $this->hiraganaFirstName->getValue() : null;
    }
}