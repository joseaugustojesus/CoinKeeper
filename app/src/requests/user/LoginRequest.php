<?php

namespace src\requests\user;

use src\interfaces\requests\LoginRequestInterface;
use src\requests\Request;

class LoginRequest extends Request implements LoginRequestInterface
{
    protected array $rules = [
        "username" => "required",
        "password" => "required",
    ];

    function __construct()
    {
        $this->execute();
    }
}
