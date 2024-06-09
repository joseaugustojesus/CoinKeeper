<?php

namespace src\services;

use Exception;
use PDOException;
use src\database\models\Example;
use src\interfaces\NotificationInterface;
use src\interfaces\repositories\UserRepositoryInterface;
use src\interfaces\requests\LoginRequestInterface;
use src\interfaces\requests\UserPasswordModifyRequestInterface;
use src\interfaces\requests\UserStoreRequestInterface;
use src\interfaces\services\UserServiceInterface;
use src\support\Json;
use src\support\Request;
use src\support\Sessions;

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
            $userCreated = $this->userRepositoryInterface->store($request->getDataNewUser());
            Sessions::set(key: "userCreated", value: $userCreated, override: true);
            $this->notificationInterface->success("Seu usuário foi criado com sucesso. <a href=\'#\'>Bora poupar! 🚀</a>");
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }

    function preflight(): Json
    {
        try {
            $secret = $this->userRepositoryInterface->byColumnsEqualsAnd(
                Request::getQuery()
            );
            if ($secret) {
                Sessions::set("passwordResetSecret", $secret, true);
                return Json::return([
                    "found" => true,
                    "message" => "Secret validado com sucesso",
                    "error" => false,
                    "redirect" => route("/account/password/reset/confirm")
                ], 200);
            } else {
                return Json::return([
                    "found" => false,
                    "message" => "Os dados não estão corretos",
                    "error" => true
                ], 404);
            }
        } catch (Exception $e) {
            dd("error: " . $e->getMessage());
        }
    }

    function passwordUpdate(UserPasswordModifyRequestInterface $request)
    {
        try {
            $user = Sessions::get("passwordResetSecret");
            $this->userRepositoryInterface->update([
                "password" => password_hash($request->get("password"), PASSWORD_DEFAULT)
            ], $user->id);
            $this->notificationInterface->success("A senha foi alterada com sucesso");
        } catch (Exception $e) {
            dd("error: " . $e->getMessage());
        }
    }


    function login(LoginRequestInterface $request): string
    {
        try {
            $user = $this->userRepositoryInterface->getByUsername($request->get("username"));
            if (!$user || !password_verify($request->get("password"), $user->password))
                throw new Exception("Não foi possível encontrar os dados do usuário informado", 404);
            $this->notificationInterface->success("Usuário logado com sucesso 🎉");
        } catch (Exception $e) {
            $this->notificationInterface->error($e->getMessage());
        } finally {
            return "/";
        }
    }
}
