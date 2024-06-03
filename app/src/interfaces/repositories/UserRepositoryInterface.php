<?php

namespace src\interfaces\repositories;

use stdClass;

interface UserRepositoryInterface
{
    function store(array $data): bool|stdClass;
    function byColumnsEqualsAnd(array $data): bool|stdClass;
}
