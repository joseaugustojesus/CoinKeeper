<?php

namespace src\interfaces\requests;

interface  LoginRequestInterface
{
    /**
     * This method returns all inputs except the token
     * 
     * @param?string $key
     * @return array<mixed, mixed>|string
     */
    public function get(?string $key = null): array|string;
}
