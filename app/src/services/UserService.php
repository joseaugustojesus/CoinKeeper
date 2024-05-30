<?php

namespace src\services;

use Exception;
use PDOException;
use src\interfaces\repositories\UserRepositoryInterface;
use src\interfaces\requests\UserStoreRequestInterface;
use src\interfaces\services\UserServiceInterface;

class UserService implements UserServiceInterface
{
    function __construct(
        private UserRepositoryInterface $userRepositoryInterface
    ) {
    }

    function store(UserStoreRequestInterface $request)
    {
        try {
            $this->userRepositoryInterface->store($request->get());
            dd("with success");
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }
}
