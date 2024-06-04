<?php

namespace src\controllers;

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
        return View::render("out.user.login");
    }

    /**
     * @return View
     */
    function new(): View
    {
        return View::render("out.user.new");
    }


    function store(UserStoreRequestInterface $request)
    {
        $this->userServiceInterface->store($request);
        return Redirect::to("/account/new/successfully");
    }

    function newSuccessfully()
    {
        return View::render("out.user.successfully", [
            "user" => Sessions::get("userCreated")
        ]);
    }


    function passwordReset()
    {
        return View::render("out.user.password");
    }
    
    
    function preflight(): Json
    {
        return $this->userServiceInterface->preflight();
    }
    
    
    function passwordConfirm()
    {
        return View::render("out.user.password_confirm");
    }

    function passwordModify(UserPasswordModifyRequestInterface $request)
    {
        $this->userServiceInterface->passwordUpdate($request);
        return Redirect::to("/");
    }
}
