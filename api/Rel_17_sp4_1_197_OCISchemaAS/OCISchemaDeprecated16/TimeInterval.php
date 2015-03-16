<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Time Interval.
 */
class TimeInterval extends ComplexType implements ComplexInterface
{
    public    $name = 'TimeInterval';
    protected $startDayOfWeek;
    protected $startHour;
    protected $startMinute;
    protected $endDayOfWeek;
    protected $endHour;
    protected $endMinute;

    public function __construct(
         $startDayOfWeek = '',
         $startHour = '',
         $startMinute = '',
         $endDayOfWeek = '',
         $endHour = '',
         $endMinute = ''
    ) {
        $this->setStartDayOfWeek($startDayOfWeek);
        $this->setStartHour($startHour);
        $this->setStartMinute($startMinute);
        $this->setEndDayOfWeek($endDayOfWeek);
        $this->setEndHour($endHour);
        $this->setEndMinute($endMinute);
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
    public function setStartDayOfWeek($startDayOfWeek = null)
    {
        $this->startDayOfWeek = new SimpleContent($startDayOfWeek);
        $this->startDayOfWeek->setName('startDayOfWeek');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startDayOfWeek
     */
    public function getStartDayOfWeek()
    {
        return ($this->startDayOfWeek) ? $this->startDayOfWeek->getValue() : null;
    }

    /**
     * 
     */
    public function setStartHour($startHour = null)
    {
        $this->startHour = new SimpleContent($startHour);
        $this->startHour->setName('startHour');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startHour
     */
    public function getStartHour()
    {
        return ($this->startHour) ? $this->startHour->getValue() : null;
    }

    /**
     * 
     */
    public function setStartMinute($startMinute = null)
    {
        $this->startMinute = new SimpleContent($startMinute);
        $this->startMinute->setName('startMinute');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startMinute
     */
    public function getStartMinute()
    {
        return ($this->startMinute) ? $this->startMinute->getValue() : null;
    }

    /**
     * 
     */
    public function setEndDayOfWeek($endDayOfWeek = null)
    {
        $this->endDayOfWeek = new SimpleContent($endDayOfWeek);
        $this->endDayOfWeek->setName('endDayOfWeek');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endDayOfWeek
     */
    public function getEndDayOfWeek()
    {
        return ($this->endDayOfWeek) ? $this->endDayOfWeek->getValue() : null;
    }

    /**
     * 
     */
    public function setEndHour($endHour = null)
    {
        $this->endHour = new SimpleContent($endHour);
        $this->endHour->setName('endHour');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endHour
     */
    public function getEndHour()
    {
        return ($this->endHour) ? $this->endHour->getValue() : null;
    }

    /**
     * 
     */
    public function setEndMinute($endMinute = null)
    {
        $this->endMinute = new SimpleContent($endMinute);
        $this->endMinute->setName('endMinute');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endMinute
     */
    public function getEndMinute()
    {
        return ($this->endMinute) ? $this->endMinute->getValue() : null;
    }
}