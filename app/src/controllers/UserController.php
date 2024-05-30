<?php

namespace src\controllers;

use src\support\View;

class UserController
{
    function new()
    {
        return View::render("out.user_new");
    }
}
