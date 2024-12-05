<?php

declare(strict_types=1);

use App\DTO\UserRegistration;
use App\Validation\Validator;

require_once 'vendor/autoload.php';

$userRegistration = new UserRegistration(
    'John',
    'john_cena@gmail.com',
);

$validator = new Validator();

$validator->validate($userRegistration);
$errors = $validator->getErrors();
