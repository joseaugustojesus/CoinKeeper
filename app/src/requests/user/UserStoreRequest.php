<?php

namespace src\requests\user;

use src\interfaces\requests\UserStoreRequestInterface;
use src\requests\Request;

class UserStoreRequest extends Request implements UserStoreRequestInterface
{
    protected array $rules = [
        "email" => "required",
        "name" => "required",
        "password" => "required",
    ];
}
