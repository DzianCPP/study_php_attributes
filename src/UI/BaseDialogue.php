<?php

declare(strict_types=1);

namespace App\UI;

use App\UI\DialogueInterface;

abstract class BaseDialogue implements DialogueInterface
{
    abstract public function askForValue(string $parameterName, string &$variableToSet): void;
    abstract public function showErrors(array $errors): void;
    abstract public function showOutput(string $outputMessage): void;

    abstract protected function setParameterValue(string &$variableToSet): void;
}
