<?php

namespace Bagratsaatsazov\Codechallenge;

final class SessionService
{
    public function __construct(
        private SessionRepository $sessionRepository,
    ) {
    }

    public function schedule(): array
    {
        return [];
    }
}
