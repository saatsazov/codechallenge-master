<?php

namespace Bagratsaatsazov\Codechallenge;

use DateTimeImmutable;

class User
{
    public function __construct(
        public int $id,
        public string $username = '',
        public DateTimeImmutable $joined = new DateTimeImmutable(),
        public ?string $name = null,
        public ?string $email = null,
        public ?string $url = null,
        public string $about = '',
        public ?string $avatar = null
    ) {
    }
}
