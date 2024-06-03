<?php

namespace src\interfaces\services;

use src\interfaces\requests\UserStoreRequestInterface;
use src\support\Json;

interface UserServiceInterface
{
 
    function store(UserStoreRequestInterface $request);
    function preflight(): Json;
}
