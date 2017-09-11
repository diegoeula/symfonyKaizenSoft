<?php

namespace Mpf\SamlBundle\Security\Authentication\Token;

use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;

class SamlUserToken extends AbstractToken {

    public $user_id;

    public function __construct(array $roles = array()) {
//        $roles=array();
        foreach ($_SERVER as $key => $value) {

            if (substr($key, 0, 16) == 'MELLON_memberOf_') {
                foreach (explode(',', $value) as $key_v => $value_v) {
                    if (substr($value_v, 0, 3) == 'CN=') {
                        $roles[] = 'ROLE_' . strtoupper(explode('=', $value_v)[1]);
                    }
                }
            }
        }
        parent::__construct($roles);

        // If the user has roles, consider it authenticated
        $this->setAuthenticated(count($roles) > 0);
    }

    public function getCredentials() {
        return '';
    }

}
