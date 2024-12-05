<?php

namespace Src\Validation\Required;

use App\Validation\Rules\ValidationRuleInterface;
use Attribute;

#[Attribute]
class Required implements ValidationRuleInterface
{
    public function getValidator(): void
    {
        // TODO implement
    }
}
