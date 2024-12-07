<?php

declare(strict_types=1);

namespace App\UI\CLI;

use App\UI\BaseDialogue;

class CliDialogue extends BaseDialogue
{
    public function askForValue(string $parameterName, string &$variableToSet): void
    {
        echo 'Please, enter the ' . $parameterName . ':' . PHP_EOL;

        $this->setParameterValue($variableToSet);
    }

    public function showErrors(array $errors): void
    {
        echo '------ ERRORS ------' . PHP_EOL;
        foreach ($errors as $key => $error) {
            echo $error . PHP_EOL;
        }
        echo '------ ERRORS ------' . PHP_EOL;
    }

    public function showOutput(string $outputMessage): void
    {
        echo '----- SUCCESS -----' . PHP_EOL;
        echo $outputMessage . PHP_EOL;
        echo '----- SUCCESS -----' . PHP_EOL;
    }

    protected function setParameterValue(string &$variableToSet): void
    {
        $variableToSet = readline();
    }
}
