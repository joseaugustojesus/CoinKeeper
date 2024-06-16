<?php

namespace src\controllers;

use src\interfaces\requests\LoginRequestInterface;
use src\interfaces\requests\UserPasswordModifyRequestInterface;
use src\interfaces\requests\UserStoreRequestInterface;
use src\interfaces\services\UserServiceInterface;
use src\support\Json;
use src\support\Redirect;
use src\support\Sessions;
use src\support\View;


class UserController
{

    function __construct(
        private UserServiceInterface $userServiceInterface
    ) {
    }

    /**
     * @return View
     */
    function login(): View
    {
        return View::render("out.login.login");
    }

    /**
     * @return View
     */
    function new(): View
    {
        return View::render("out.user.new");
    }


    /**
     * @param UserStoreRequestInterface $request
     * @return Redirect
     */
    function store(UserStoreRequestInterface $request): Redirect
    {
        $this->userServiceInterface->store($request);
        return Redirect::to("/account/new/successfully");
    }

    function newSuccessfully(): View
    {
        return View::render("out.user.successfully", [
            "user" => Sessions::get("userCreated")
        ]);
    }


    function passwordReset(): View
    {
        return View::render("out.password.password");
    }


    function preflight(): Json
    {
        return $this->userServiceInterface->preflight();
    }


    function passwordConfirm(): View
    {
        return View::render("out.password.password_confirm");
    }

    /**
     * @param UserPasswordModifyRequestInterface $request
     * @return Redirect
     */
    function passwordModify(UserPasswordModifyRequestInterface $request): Redirect
    {
        $this->userServiceInterface->passwordUpdate($request);
        return Redirect::to("/");
    }

    /**
     * @param LoginRequestInterface $request
     * @return Redirect
     */
    function loginStore(LoginRequestInterface $request): Redirect
    {
        $redirect = $this->userServiceInterface->login($request);
        return Redirect::to($redirect);
    }
}
