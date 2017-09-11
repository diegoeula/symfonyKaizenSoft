<?php

namespace Mpf\SamlBundle\DependencyInjection\Security\Factory;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SecurityFactoryInterface;

class SamlFactory implements SecurityFactoryInterface {

    public function create(ContainerBuilder $container, $id, $config, $userProvider, $defaultEntryPoint) {
        $providerId = 'security.authentication.provider.saml.' . $id;
        $container
                ->setDefinition($providerId, new DefinitionDecorator('saml.security.authentication.provider'))
                ->replaceArgument(0, new Reference($userProvider))
        ;

        $listenerId = 'security.authentication.listener.wsse.' . $id;
        $listener = $container->setDefinition($listenerId, new DefinitionDecorator('saml.security.authentication.listener'));

        return array($providerId, $listenerId, $defaultEntryPoint);
    }

    public function getPosition() {
        return 'pre_auth';
    }

    public function getKey() {
        return 'saml';
    }

    public function addConfiguration(NodeDefinition $node) {
        
    }

}
