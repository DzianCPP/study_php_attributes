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


            foreach ($attributes as $attribute) {
                $validator = $attribute
                    ->newInstance()
                    ->getValidator()
                ;

                if (!$validator->validate($property->getValue($dto))) {
                    $this->addError(
                        $property->getName()
                        . ' is not valid.'
                        . PHP_EOL
                        . 'The values you provided is: '
                        . $property->getValue($dto)
                    );
                }
            }
        }
    }

    public function addError(string $message): void
    {
        $this->errors[] = $message;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
