<?php

namespace src\interfaces\services;

use src\interfaces\requests\LoginRequestInterface;
use src\interfaces\requests\UserPasswordModifyRequestInterface;
use src\interfaces\requests\UserStoreRequestInterface;
use src\support\Json;

interface UserServiceInterface
{

    /**
     * @param UserStoreRequestInterface $request
     */
    function store(UserStoreRequestInterface $request): void;
    
    function preflight(): Json;
    /**
     * @param UserPasswordModifyRequestInterface $request
     */
    function passwordUpdate(UserPasswordModifyRequestInterface $request): void;


    function login(LoginRequestInterface $request): string;
}
