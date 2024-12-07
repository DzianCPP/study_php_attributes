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

    protected function setParameterValue(string &$variableToSet): void
    {
        $variableToSet = readline();
    }
}
