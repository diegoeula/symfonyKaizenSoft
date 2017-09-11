<?php

namespace Mpf\TemplateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Schema\Table;

/**
 * Funcionalidad
 * @ORM\Entity(repositoryClass="Mpf\TemplateBundle\Entity\FuncionalidadRepository")
 * @ORM\Table(name="transportedivisas.funcionalidad")
 */
class Funcionalidad {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="funcionalidad_nombre", type="string", length=40)
     */
    private $funcionalidadNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="funcionalidad_descripcion", type="string", length=255 ,nullable=true)
     */
    private $funcionalidadDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="funcionalidad_route", type="string", length=40,nullable=true)
     */
    private $funcionalidadRoute;

    /**
     * @var integer
     * 
     * @ORM\Column(name="funcionalidad_padre", type="integer", nullable=true)
     */
    private $funcionalidadPadre;

    /**
     * @var integer
     *
     * @ORM\Column(name="funcionalidad_orden", type="integer")
     */
    private $funcionalidadOrden;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="funcionalidad_alta", type="date")
     */
    private $funcionalidadAlta;

    /**
     * @var string
     *
     * @ORM\Column(name="funcionalidad_usu_alta", type="string", length=20)
     */
    private $funcionalidadUsuAlta;

    /**
     * @ORM\Column(name="Funcionalidad_admin", type="boolean",nullable=true)
     */
    private $isAdmin;

    /**
     * @ORM\Column(name="icon", type="string",nullable=true)
     */
    private $icon;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set funcionalidadNombre
     *
     * @param string $funcionalidadNombre
     *
     * @return Funcionalidad
     */
    public function setFuncionalidadNombre($funcionalidadNombre) {
        $this->funcionalidadNombre = $funcionalidadNombre;

        return $this;
    }

    /**
     * Get funcionalidadNombre
     *
     * @return string
     */
    public function getFuncionalidadNombre() {
        return $this->funcionalidadNombre;
    }

    /**
     * Set funcionalidadDescripcion
     *
     * @param string $funcionalidadDescripcion
     *
     * @return Funcionalidad
     */
    public function setFuncionalidadDescripcion($funcionalidadDescripcion) {
        $this->funcionalidadDescripcion = $funcionalidadDescripcion;

        return $this;
    }

    /**
     * Get funcionalidadDescripcion
     *
     * @return string
     */
    public function getFuncionalidadDescripcion() {
        return $this->funcionalidadDescripcion;
    }

    /**
     * Set funcionalidadRoute
     *
     * @param string $funcionalidadRoute
     *
     * @return Funcionalidad
     */
    public function setFuncionalidadRoute($funcionalidadRoute) {
        $this->funcionalidadRoute = $funcionalidadRoute;

        return $this;
    }

    /**
     * Get funcionalidadRoute
     *
     * @return string
     */
    public function getFuncionalidadRoute() {
        return $this->funcionalidadRoute;
    }

    /**
     * Set funcionalidadPadre
     *
     * @param integer $funcionalidadPadre
     *
     * @return Funcionalidad
     */
    public function setFuncionalidadPadre($funcionalidadPadre) {
        $this->funcionalidadPadre = $funcionalidadPadre;

        return $this;
    }

    /**
     * Get funcionalidadPadre
     *
     * @return integer
     */
    public function getFuncionalidadPadre() {
        return $this->funcionalidadPadre;
    }

    /**
     * Set funcionalidadOrden
     *
     * @param integer $funcionalidadOrden
     *
     * @return Funcionalidad
     */
    public function setFuncionalidadOrden($funcionalidadOrden) {
        $this->funcionalidadOrden = $funcionalidadOrden;

        return $this;
    }

    /**
     * Get funcionalidadOrden
     *
     * @return integer
     */
    public function getFuncionalidadOrden() {
        return $this->funcionalidadOrden;
    }

    /**
     * Set funcionalidadAlta
     *
     * @param \DateTime $funcionalidadAlta
     *
     * @return Funcionalidad
     */
    public function setFuncionalidadAlta($funcionalidadAlta) {
        $this->funcionalidadAlta = $funcionalidadAlta;

        return $this;
    }

    /**
     * Get funcionalidadAlta
     *
     * @return \DateTime
     */
    public function getFuncionalidadAlta() {
        return $this->funcionalidadAlta;
    }

    /**
     * Set funcionalidadUsuAlta
     *
     * @param string $funcionalidadUsuAlta
     *
     * @return Funcionalidad
     */
    public function setFuncionalidadUsuAlta($funcionalidadUsuAlta) {
        $this->funcionalidadUsuAlta = $funcionalidadUsuAlta;

        return $this;
    }

    /**
     * Get funcionalidadUsuAlta
     *
     * @return string
     */
    public function getFuncionalidadUsuAlta() {
        return $this->funcionalidadUsuAlta;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     *
     * @return Funcionalidad
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

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Funcionalidad
     */
    public function setIcon($icon) {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon() {
        return $this->icon;
    }

}
