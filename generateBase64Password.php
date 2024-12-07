<?php
// God forbid me for not using all the knowledge and skills I got from
// my coding ancestors in this project.
// I simply wanted to learn how to use PHP Attributes

declare(strict_types=1);

use App\DTO\UserRegistration;
use App\UI\CLI\CliDialogue;
use App\Validation\Validator;

require_once 'vendor/autoload.php';

$username = $email = '';

$ui = new CliDialogue();

$ui->askForValue('username', $username);
$ui->askForValue('email', $email);

$userRegistration = new UserRegistration(
    $username,
    $email
);

$validator = new Validator();

$validator->validate($userRegistration);
$errors = $validator->getErrors();

if (!$errors) {
    $ui->showOutput(base64_encode($username . ':' . $email));

    return;
}

$ui->showErrors($errors);
