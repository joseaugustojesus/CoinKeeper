<?php

namespace src\interfaces\repositories;

use stdClass;

interface UserRepositoryInterface
{
    /**
     * @param array<string, mixed> $data
     * @return bool|stdClass
     */
    function store(array $data): bool|stdClass;

     /**
     * @param array<string, mixed> $data
     * @param string $id
     * @return bool|stdClass
     */
    function update(array $data, string $id): bool|stdClass;

    /**
     * @param array<string, mixed> $data
     * @return bool|stdClass
     */
    function byColumnsEqualsAnd(array $data): bool|stdClass;

    /**
     * @param string $username
     * @return bool|stdClass
     */
    function getByUsername(string $username): bool|stdClass;
}
