<?php

use src\interfaces\NexusRepositoryInterface;
use src\interfaces\NotificationInterface;
use src\interfaces\requests\UserStoreRequestInterface;
use src\repositories\NexusRepository;

use src\requests\user\UserStoreRequest;
use src\support\Notification;

use function DI\autowire;

$containerBuilder = (new  DI\ContainerBuilder());

$containerBuilder->useAttributes(true);

$containerBuilder->addDefinitions(
    [
        NexusRepositoryInterface::class => autowire(NexusRepository::class),
        NotificationInterface::class => autowire(Notification::class),

        UserStoreRequestInterface::class => autowire(UserStoreRequest::class),
    ]
);

return $containerBuilder->build();
