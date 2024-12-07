<?php

declare(strict_types=1);

namespace App\UI;

interface DialogueInterface
{
    public function askForValue(string $parameterName, string &$variableToSet): void;
    public function showErrors(array $errors): void;
    public function showOutput(string $outputMessage): void;
}