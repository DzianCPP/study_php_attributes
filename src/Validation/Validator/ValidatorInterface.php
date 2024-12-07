<?php

declare(strict_types=1);

namespace App\Validation\Validator;

interface ValidatorInterface
{
    public function validate(string|array $value): bool;
    public function buildError(string $propertyName, string|array $value): string;
}
