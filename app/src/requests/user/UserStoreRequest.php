<?php

namespace src\requests\user;

use Ramsey\Uuid\Uuid;
use src\interfaces\requests\UserStoreRequestInterface;
use src\requests\Request;

class UserStoreRequest extends Request implements UserStoreRequestInterface
{
    protected array $rules = [
        "email" => "required|unique:users",
        "name" => "required|unique:users",
        "password" => "required",
    ];

    function __construct()
    {
        $this->execute();
    }

    /**
     * @return array<string, mixed>
     */
    function getDataNewUser(): array
    {
        $data = $this->get();
        $data["secret"] = Uuid::uuid4()->toString();
        return $data;
    }
}
