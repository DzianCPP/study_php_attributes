<?php

declare(strict_types=1);

namespace App\Validation;

use App\DTO\BaseDto;
use App\Validation\Rules\ValidationRuleInterface;
use ReflectionAttribute;
use ReflectionClass;

class Validator
{
    private array $errors = [];

    public function validate(BaseDto $dto): void
    {
        $reflector = new ReflectionClass($dto::class);

        foreach ($reflector->getProperties() as $property) {
            $attributes = $property->getAttributes(
                ValidationRuleInterface::class,
                ReflectionAttribute::IS_INSTANCEOF,
            );

            dd($attributes);
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
