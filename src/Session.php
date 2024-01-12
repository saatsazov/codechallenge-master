<?php

namespace Bagratsaatsazov\CodechallengeMaster;

use DateTimeImmutable;

class User
{
    public function __construct(
        // todo: ask why no unique constrain on session id table
        public string $id,
        public string $name = '',

        public string $session_key = '',

        public DateTimeImmutable $session_start = new DateTimeImmutable('0000-00-00 00:00:00'),
        public ?DateTimeImmutable $session_end = null,

        # todo: enums?
        public ?string $session_type = null,
        public ?string $session_subtype = null,

        public string $description = '',

        # todo: somehow mapping for this variable.
        public bool $active = true,
    ) {
    }
}
