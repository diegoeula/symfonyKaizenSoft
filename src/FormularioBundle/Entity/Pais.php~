<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="transportedivisas.Pais")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\PaisRepository")
 */
class Pais {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=40)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="gentilicio", type="string", length=40)
     */
    private $gentilicio;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Pais
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set gentilicio
     *
     * @param string $gentilicio
     *
     * @return Pais
     */
    public function setGentilicio($gentilicio)
    {
        $this->gentilicio = $gentilicio;

        return $this;
    }

    /**
     * Get gentilicio
     *
     * @return string
     */
    public function getGentilicio()
    {
        return $this->gentilicio;
    }
}
