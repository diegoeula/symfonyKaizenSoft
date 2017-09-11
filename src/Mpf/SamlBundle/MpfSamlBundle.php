<?php

namespace Mpf\SamlBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Mpf\SamlBundle\DependencyInjection\Security\Factory\SamlFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MpfSamlBundle extends Bundle {

    public function build(ContainerBuilder $container) {
        parent::build($container);

        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new SamlFactory());
    }

}
