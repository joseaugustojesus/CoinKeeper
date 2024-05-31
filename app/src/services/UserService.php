<?php

namespace src\services;


use PDOException;
use src\interfaces\NotificationInterface;
use src\interfaces\repositories\UserRepositoryInterface;
use src\interfaces\requests\UserStoreRequestInterface;
use src\interfaces\services\UserServiceInterface;

class UserService implements UserServiceInterface
{
    function __construct(
        private UserRepositoryInterface $userRepositoryInterface,
        private NotificationInterface $notificationInterface
    ) {
    }

    function store(UserStoreRequestInterface $request)
    {
        try {
            $this->userRepositoryInterface->store($request->get());
            $this->notificationInterface->success("Seu usuário foi criado com sucesso. <a href=\'#\'>Bora poupar! 🚀</a>");
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }
}
