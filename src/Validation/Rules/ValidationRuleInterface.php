<?php

declare(strict_types=1);

namespace App\Validation\Rules;

interface ValidationRuleInterface
{
    public function getValidator();
}