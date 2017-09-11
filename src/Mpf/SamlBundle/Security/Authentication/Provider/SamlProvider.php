<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mpf\SamlBundle\Security\Authentication\Provider;

use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Mpf\SamlBundle\Security\Authentication\Token\SamlUserToken;

class SamlProvider implements AuthenticationProviderInterface {

    private $userProvider;
    private $cacheDir;

    public function __construct(UserProviderInterface $userProvider, $cacheDir) {
        $this->userProvider = $userProvider;
        $this->cacheDir = $cacheDir;
    }

    public function authenticate(TokenInterface $token) {
        $user = $this->userProvider->loadUserByUsername($token->getUsername());
        if ($user and $user->isEnabled()) {
            $authenticatedToken = new SamlUserToken($user->getRoles());
            $authenticatedToken->setUser($user);

            return $authenticatedToken;
        }

        throw new AuthenticationException('The Saml authentication failed.');
    }

    public function supports(TokenInterface $token) {
        return $token instanceof SamlUserToken;
    }

}
