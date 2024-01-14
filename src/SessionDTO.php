<?php

namespace Bagratsaatsazov\Codechallenge;

use DateTimeImmutable;

final class SessionDTO
{
    public function __construct(
        public string $id,
        public string $name = '',
        public DateTimeImmutable $session_start,
        public ?DateTimeImmutable $session_end = null,
    ) {
    }
}
