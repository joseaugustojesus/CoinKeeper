<?php

namespace src\controllers;

use src\support\View;

class ExampleController
{
   
    function example(): View
    {
        return View::render("auth.login", []);
    }
}
