<?php

declare(strict_types=1);

use App\DTO\UserRegistration;
use App\Validation\Validator;

require_once 'vendor/autoload.php';

$userRegistration = new UserRegistration(
    '',
    'john_cena@gmail.com',
);

$validator = new Validator();

$validator->validate($userRegistration);
$errors = $validator->getErrors();

if (!$errors) {
    echo $userRegistration->username
        . PHP_EOL
        . $userRegistration->email
        . PHP_EOL
    ;

    return;
}

foreach ($errors as $e) {
    echo $e;
}
