<?php

namespace src\interfaces\services;

use src\interfaces\requests\UserStoreRequestInterface;

interface UserServiceInterface
{
    function store(UserStoreRequestInterface $request);
}
