<?php

declare(strict_types=1);

use App\DTO\UserRegistration;

require_once 'vendor/autoload.php';

$userRegistration = new UserRegistration(
    'John',
    'john_cena@gmail.com',
);

dd($userRegistration);