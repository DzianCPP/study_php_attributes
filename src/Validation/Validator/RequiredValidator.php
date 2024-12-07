<?php

declare(strict_types=1);

namespace App\Validation\Validator;

class RequiredValidator implements ValidatorInterface
{
    public function validate(string|array $value): bool
    {
        return !empty($value);
    }

    public function buildError(string $propertyName, string|array $value): string
    {
        return "The value '$propertyName' is empty!";
    }
}
