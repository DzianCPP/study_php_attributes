<?php

declare(strict_types=1);

namespace App\DTO;

readonly class UserRegistration
{
    public function __construct(
        public string $username,
        public string $email,
    ) {
    }
}
