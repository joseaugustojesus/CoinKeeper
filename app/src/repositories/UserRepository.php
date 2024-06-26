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


    /**
     * @param array<string, mixed> $data
     * @return bool|stdClass
     */
    function store(array $data): bool|stdClass
    {
        return $this->nexusRepositoryInterface
            ->insert("users")
            ->values($data)
            ->make();
    }


    /**
     * @param array<string, mixed> $data
     * @param string $id
     * @return bool|stdClass
     */
    function update(array $data, string $id): bool|stdClass
    {
        return $this->nexusRepositoryInterface
            ->setTable("users")
            ->update($data)
            ->where("id", "=", $id)
            ->make();
    }

    /**
     * @param array<string, mixed> $data
     * @return bool|stdClass
     */
    function byColumnsEqualsAnd(array $data): bool|stdClass
    {
        $repository = $this->nexusRepositoryInterface->setTable("users")->selectOne();

        $idx = 0;
        foreach ($data as $column => $value) {
            if ($idx === 0)
                $repository->where($column, "=", $value);
            else
                $repository->andWhere($column, "=", $value);
            $idx++;
        }
        return $repository->make();
    }

    /**
     * @param string $username
     * @return bool|stdClass
     */
    function getByUsername(string $username): bool|stdClass
    {
        return $this->nexusRepositoryInterface
            ->setTable("users")
            ->selectOne()
            ->where("name", "=", $username)
            ->make();
    }
}
