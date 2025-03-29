<?php

namespace WebFramework;

use Psr\Container\ContainerInterface;
use WebFramework\Security\ConfigService;

return [
    Core\Browserless::class => function (ContainerInterface $c) {
        $secureConfigService = $c->get(ConfigService::class);

        $config = $secureConfigService->getAuthConfig('browserless');

        return new Core\Browserless(
            $c->get(Security\ProtectService::class),
            $config['local_server'],
            $config['pdf_endpoint'],
            $config['token'],
        );
    },
];
