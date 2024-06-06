<?php

use src\interfaces\NexusRepositoryInterface;
use src\interfaces\NotificationInterface;
use src\interfaces\repositories\UserRepositoryInterface;
use src\interfaces\requests\LoginRequestInterface;
use src\interfaces\requests\UserPasswordModifyRequestInterface;
use src\interfaces\requests\UserStoreRequestInterface;
use src\interfaces\services\UserServiceInterface;
use src\repositories\NexusRepository;
use src\repositories\UserRepository;
use src\requests\user\LoginRequest;
use src\requests\user\UserPasswordModifyRequest;
use src\requests\user\UserStoreRequest;
use src\services\UserService;
use src\support\Notification;

use function DI\autowire;

$containerBuilder = (new  DI\ContainerBuilder());

$containerBuilder->useAttributes(true);

$containerBuilder->addDefinitions(
    [
        NexusRepositoryInterface::class => autowire(NexusRepository::class),
        NotificationInterface::class => autowire(Notification::class),

        UserStoreRequestInterface::class => autowire(UserStoreRequest::class),
        UserServiceInterface::class => autowire(UserService::class),
        UserRepositoryInterface::class => autowire(UserRepository::class),
        UserPasswordModifyRequestInterface::class => autowire(UserPasswordModifyRequest::class),
        LoginRequestInterface::class => autowire(LoginRequest::class),
        
    ]
);

return $containerBuilder->build();
