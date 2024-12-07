<?php

namespace App\Validation\Rules;

use App\Validation\Validator\RequiredValidator;
use App\Validation\Validator\ValidatorInterface;
use App\Validation\Rules\ValidationRuleInterface;
use Attribute;

#[Attribute]
class Required implements ValidationRuleInterface
{
    public function getValidator(): ValidatorInterface
    {
        return new RequiredValidator();
    }
}
