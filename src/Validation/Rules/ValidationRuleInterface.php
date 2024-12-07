<?php

declare(strict_types=1);

namespace App\Validation\Rules;

use App\Validation\Validator\ValidatorInterface;

interface ValidationRuleInterface
{
    public function getValidator(): ?ValidatorInterface;
}