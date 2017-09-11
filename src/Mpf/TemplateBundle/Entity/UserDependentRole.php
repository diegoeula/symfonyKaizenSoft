<?php

namespace Mpf\TemplateBundle\Entity;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Mpf\TemplateBundle\Entity\User;

class UserDependentRole implements RoleInterface {

    private $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function getRole() {
        return $this->user->checkAdminUser();
    }

}
