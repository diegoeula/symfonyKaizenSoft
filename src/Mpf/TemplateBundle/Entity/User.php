<?php

namespace Mpf\TemplateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Mpf\TemplateBundle\Entity\UserDependentRole;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Table(name="transportedivisas.app_users")
 * @ORM\Entity(repositoryClass="Mpf\TemplateBundle\Entity\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(name="is_admin", type="boolean",nullable=true)
     */
    private $isAdmin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fiscalia;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $name;

    public function __construct() {
        $this->isActive = true;
        $this->isAdmin = false;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
        $this->roles = new ArrayCollection();
    }

    public function getSalt() {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword() {
        return '';
    }

    public function eraseCredentials() {
        
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->isActive;
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles() {
        return array(new UserDependentRole($this),);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->username,
            $this->isActive,
            $this->isAdmin,
                // see section on salt below
                // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
                $this->id,
                $this->username,
                $this->isActive,
                $this->isAdmin,
                // see section on salt below
                // $this->salt
                ) = unserialize($serialized);
    }

    public function getUsername() {
        return $this->username;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive) {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive() {
        return $this->isActive;
    }

    function RandomString() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 60; $i++) {
            $randstring = $randstring . $characters[rand(0, strlen($characters) - 1)];
        }
        return $randstring;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set distrito
     *
     * @param string $fuero
     *
     * @return string
     */
    public function setFuero($fuero) {
        $this->fuero = $fuero;

        return $this;
    }

    /**
     * Get fuero
     *
     * @return string
     */
    public function getFuero() {
        return $this->fuero;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     * @return User
     */
    public function setIsAdmin($isAdmin) {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean
     */
    public function getIsAdmin() {
        return $this->isAdmin;
    }

    public function checkAdminUser() {
        if ($this->isAdmin === true) {
            return 'ROLE_ADMIN';
        } else {
            return 'ROLE_USER';
        }
    }


    /**
     * Set fiscalia
     *
     * @param integer $fiscalia
     *
     * @return User
     */
    public function setFiscalia($fiscalia)
    {
        $this->fiscalia = $fiscalia;

        return $this;
    }

    /**
     * Get fiscalia
     *
     * @return integer
     */
    public function getFiscalia()
    {
        return $this->fiscalia;
    }
}
