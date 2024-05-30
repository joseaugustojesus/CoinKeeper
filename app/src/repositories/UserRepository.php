<?php

namespace src\repositories;

use src\interfaces\NexusRepositoryInterface;
use src\interfaces\repositories\UserRepositoryInterface;
use stdClass;

class UserRepository implements UserRepositoryInterface
{
    function __construct(
        private NexusRepositoryInterface $nexusRepositoryInterface
    ) {
    }


    function store(array $data): bool|stdClass
    {
        return $this->nexusRepositoryInterface
            ->insert("users")
            ->values($data)
            ->make();
    }
}
