<?php

namespace src\controllers;

use src\interfaces\requests\UserStoreRequestInterface;
use src\support\View;

class UserController
{

    /**
     * @return View
     */
    function new(): View
    {
        return View::render("out.user_new");
    }


    function store(UserStoreRequestInterface $request)
    {
        dd("Data received:", $request->get());
    }
}
