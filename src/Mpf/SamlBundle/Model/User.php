<?php

namespace Mpf\SamlBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

abstract class User implements UserInterface, \Serializable {

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
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    public function __construct() {
        $this->isActive = true;
    }

    public function getUsername() {
        return $this->username;
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

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles() {
        
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
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
                $this->id,
                $this->username,
                $this->isActive,
                ) = unserialize($serialized);
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

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }

    function RandomString() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 60; $i++) {
            $randstring = $randstring . $characters[rand(0, strlen($characters) - 1)];
        }
        return $randstring;
    }

    public function upload() {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        if ($this->path === null) {
            $this->path = $this->RandomString();
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and then the
        // target filename to move to
//        $this->getFile()->move(
//                $this->getUploadRootDir(), $this->getFile()->getClientOriginalName()
//        );
        $this->getFile()->move(
                $this->getUploadRootDir(), $this->path
        );

        // set the path property to the filename where you've saved the file
        //$this->path = $this->getFile()->getClientOriginalName();
        //$this->path = $filename;
        // clean up the file property as you won't need it anymore
        $this->file = null;
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
     * Set path
     *
     * @param string $path
     *
     * @return User
     */
    public function setPath($path) {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Set distrito
     *
     * @param string $fiscalia
     *
     * @return integer
     */
    public function setFiscalia($fiscalia) {
        $this->fiscalia = $fiscalia;

        return $this;
    }

    /**
     * Get fiscalia
     *
     * @return integer
     */
    public function getFiscalia() {
        return $this->fiscalia;
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

}
