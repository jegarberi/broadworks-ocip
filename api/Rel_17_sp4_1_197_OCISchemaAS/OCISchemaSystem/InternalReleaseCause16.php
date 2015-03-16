<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Possible values for the protocol-neutral internal release cause.
 */
class InternalReleaseCause16 extends SimpleType
{
    public $name = "InternalReleaseCause16";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Busy',
            'Forbidden',
            'Routing Failure',
            'Global Failure',
            'Request Failure',
            'Server Failure',
            'Translation Failure',
            'Temporarily Unavailable',
            'User Not Found',
            'Request Timeout',
            'Dial Tone Timeout',
            'Insufficient Credits'
        ]));
    }
}