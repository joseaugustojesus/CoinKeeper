<?php

namespace src\middlewares;

use src\support\Sessions;

class HasSecret
{
    function __construct()
    {
        $this->handle();
    }

    function handle(): bool
    {
        if (Sessions::get("passwordResetSecret"))
            return true;

        notification(message: "Whoops, parece que algo saiu errado 😥", type: "error");
        redirect(route("/"));
        die;
    }
}
