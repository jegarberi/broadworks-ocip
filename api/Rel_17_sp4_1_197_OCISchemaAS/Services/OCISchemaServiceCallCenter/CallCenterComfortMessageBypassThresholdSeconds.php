<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinInclusive;
use Broadworks_OCIP\core\Builder\Restrictions\MaxInclusive;


/**
 * Call center comfort message bypass threshold. This is the maximum estimated wait time to allow 
 *         bypassing the comfort message.
 */
class CallCenterComfortMessageBypassThresholdSeconds extends SimpleType
{
    public $name = "CallCenterComfortMessageBypassThresholdSeconds";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new MinInclusive("1"));
        $this->addRestriction(new MaxInclusive("120"));
    }
}