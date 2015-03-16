<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingLocation14sp4;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSequentialRingGetRequest14sp4. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserSequentialRingGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserSequentialRingGetResponse14sp4';
    protected $ringBaseLocationFirst;
    protected $baseLocationNumberOfRings;
    protected $continueIfBaseLocationIsBusy;
    protected $callerMayStopSearch;
    protected $Location01;
    protected $Location02;
    protected $Location03;
    protected $Location04;
    protected $Location05;
    protected $criteriaTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\UserSequentialRingGetResponse14sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRingBaseLocationFirst($ringBaseLocationFirst = null)
    {
        $this->ringBaseLocationFirst = new PrimitiveType($ringBaseLocationFirst);
        $this->ringBaseLocationFirst->setName('ringBaseLocationFirst');
        return $this;
    }

    /**
     * 
     * @return boolean $ringBaseLocationFirst
     */
    public function getRingBaseLocationFirst()
    {
        return ($this->ringBaseLocationFirst) ? $this->ringBaseLocationFirst->getValue() : null;
    }

    /**
     * 
     */
    public function setBaseLocationNumberOfRings($baseLocationNumberOfRings = null)
    {
        $this->baseLocationNumberOfRings = ($baseLocationNumberOfRings InstanceOf SequentialRingNumberOfRings)
             ? $baseLocationNumberOfRings
             : new SequentialRingNumberOfRings($baseLocationNumberOfRings);
        $this->baseLocationNumberOfRings->setName('baseLocationNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return SequentialRingNumberOfRings $baseLocationNumberOfRings
     */
    public function getBaseLocationNumberOfRings()
    {
        return ($this->baseLocationNumberOfRings) ? $this->baseLocationNumberOfRings->getValue() : null;
    }

    /**
     * 
     */
    public function setContinueIfBaseLocationIsBusy($continueIfBaseLocationIsBusy = null)
    {
        $this->continueIfBaseLocationIsBusy = new PrimitiveType($continueIfBaseLocationIsBusy);
        $this->continueIfBaseLocationIsBusy->setName('continueIfBaseLocationIsBusy');
        return $this;
    }

    /**
     * 
     * @return boolean $continueIfBaseLocationIsBusy
     */
    public function getContinueIfBaseLocationIsBusy()
    {
        return ($this->continueIfBaseLocationIsBusy) ? $this->continueIfBaseLocationIsBusy->getValue() : null;
    }

    /**
     * 
     */
    public function setCallerMayStopSearch($callerMayStopSearch = null)
    {
        $this->callerMayStopSearch = new PrimitiveType($callerMayStopSearch);
        $this->callerMayStopSearch->setName('callerMayStopSearch');
        return $this;
    }

    /**
     * 
     * @return boolean $callerMayStopSearch
     */
    public function getCallerMayStopSearch()
    {
        return ($this->callerMayStopSearch) ? $this->callerMayStopSearch->getValue() : null;
    }

    /**
     * 
     */
    public function setLocation01(SequentialRingLocation14sp4 $Location01 = null)
    {
        $this->Location01 = ($Location01 InstanceOf SequentialRingLocation14sp4)
             ? $Location01
             : new SequentialRingLocation14sp4($Location01);
        $this->Location01->setName('Location01');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation14sp4 $Location01
     */
    public function getLocation01()
    {
        return $this->Location01;
    }

    /**
     * 
     */
    public function setLocation02(SequentialRingLocation14sp4 $Location02 = null)
    {
        $this->Location02 = ($Location02 InstanceOf SequentialRingLocation14sp4)
             ? $Location02
             : new SequentialRingLocation14sp4($Location02);
        $this->Location02->setName('Location02');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation14sp4 $Location02
     */
    public function getLocation02()
    {
        return $this->Location02;
    }

    /**
     * 
     */
    public function setLocation03(SequentialRingLocation14sp4 $Location03 = null)
    {
        $this->Location03 = ($Location03 InstanceOf SequentialRingLocation14sp4)
             ? $Location03
             : new SequentialRingLocation14sp4($Location03);
        $this->Location03->setName('Location03');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation14sp4 $Location03
     */
    public function getLocation03()
    {
        return $this->Location03;
    }

    /**
     * 
     */
    public function setLocation04(SequentialRingLocation14sp4 $Location04 = null)
    {
        $this->Location04 = ($Location04 InstanceOf SequentialRingLocation14sp4)
             ? $Location04
             : new SequentialRingLocation14sp4($Location04);
        $this->Location04->setName('Location04');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation14sp4 $Location04
     */
    public function getLocation04()
    {
        return $this->Location04;
    }

    /**
     * 
     */
    public function setLocation05(SequentialRingLocation14sp4 $Location05 = null)
    {
        $this->Location05 = ($Location05 InstanceOf SequentialRingLocation14sp4)
             ? $Location05
             : new SequentialRingLocation14sp4($Location05);
        $this->Location05->setName('Location05');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation14sp4 $Location05
     */
    public function getLocation05()
    {
        return $this->Location05;
    }

    /**
     * 
     */
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
        $this->criteriaTable = $criteriaTable;
        $this->criteriaTable->setName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }
}