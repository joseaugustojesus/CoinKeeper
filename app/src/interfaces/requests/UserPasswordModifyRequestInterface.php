<?php
namespace src\interfaces\requests;

interface UserPasswordModifyRequestInterface
{
    /**
     * This method returns all inputs except the token
     * 
     * @param ?string $key
     * @return array<mixed, mixed>|string
     */
    public function get(?string $key = null): array|string;
}
