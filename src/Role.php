<?php

namespace Bagratsaatsazov\CodechallengeMaster;

use DateTimeImmutable;

class Role
{
    public function __construct(
        public int $userid,
        public int $sessionid,
        public DateTimeImmutable $updated,

        /**
         * Todo: enum
         * 
         * UNIQUE KEY `userid` (`userid`,`sessionid`,`usertype`)
         * meaning only one user can be attached to one session with specific role.
        */
        public ?string $usertype = '',
    ) {
    }
}