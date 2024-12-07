<?php

declare(strict_types=1);

namespace App\Validation\Validator;

interface ValidatorInterface
{
    public function validate(string|array $value): bool;
}
