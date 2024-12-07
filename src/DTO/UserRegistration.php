<?php

declare(strict_types=1);

namespace App\DTO;

use App\DTO\BaseDto;
use App\Validation\Rules\Required;

readonly class UserRegistration extends BaseDto
{
    public function __construct(
        #[Required] public string $username,
        #[Required] public string $email,
    ) {
    }
}
