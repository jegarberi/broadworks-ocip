<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinLength;


/**
 * Information file.
 */
class BroadWorksMobileManagerInformationFile extends SimpleType
{
    public $name = "BroadWorksMobileManagerInformationFile";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "xs:base64Binary";
        $this->addRestriction(new MinLength("1"));
    }
}