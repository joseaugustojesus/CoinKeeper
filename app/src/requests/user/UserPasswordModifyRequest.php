<?php

namespace src\requests\user;

use src\interfaces\requests\UserPasswordModifyRequestInterface;
use src\requests\Request;


class UserPasswordModifyRequest extends Request implements UserPasswordModifyRequestInterface
{
    protected array $rules = [
        "password" => "required",
        "password_confirm" => "required",
    ];

    function __construct()
    {
        $this->execute();
    }
}
