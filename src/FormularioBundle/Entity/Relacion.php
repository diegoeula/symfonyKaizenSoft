<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacion
 *
 * @ORM\Table(name="transportedivisas.Relacion")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\RelacionRepository")
 */
class Relacion {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idcausa", type="integer")
     */
    private $idcausa;

    /**
     * @var int
     *
     * @ORM\Column(name="personaorigen", type="integer")
     */
    private $personaorigen;

    /**
     * @var int
     *
     * @ORM\Column(name="personadestino", type="integer")
     */
    private $personadestino;

    /**
     * @ORM\ManyToOne(targetEntity="TipoRelacion")
     * @ORM\JoinColumn(name="tiporelacion", referencedColumnName="id")
     */
    private $tiporelacion;

    /**
     * @ORM\ManyToOne(targetEntity="TipoRelacionVersion")
     * @ORM\JoinColumn(name="tiporelacionversion", referencedColumnName="id")
     */
    private $tiporelacionversion;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=2048, nullable=true)
     */
    private $observacion;


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
     * Set idcausa
     *
     * @param integer $idcausa
     *
     * @return Relacion
     */
    public function setIdcausa($idcausa)
    {
        $this->idcausa = $idcausa;

        return $this;
    }

    /**
     * Get idcausa
     *
     * @return integer
     */
    public function getIdcausa()
    {
        return $this->idcausa;
    }

    /**
     * Set personaorigen
     *
     * @param integer $personaorigen
     *
     * @return Relacion
     */
    public function setPersonaorigen($personaorigen)
    {
        $this->personaorigen = $personaorigen;

        return $this;
    }

    /**
     * Get personaorigen
     *
     * @return integer
     */
    public function getPersonaorigen()
    {
        return $this->personaorigen;
    }

    /**
     * Set personadestino
     *
     * @param integer $personadestino
     *
     * @return Relacion
     */
    public function setPersonadestino($personadestino)
    {
        $this->personadestino = $personadestino;

        return $this;
    }

    /**
     * Get personadestino
     *
     * @return integer
     */
    public function getPersonadestino()
    {
        return $this->personadestino;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Relacion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set tiporelacion
     *
     * @param \FormularioBundle\Entity\TipoRelacion $tiporelacion
     *
     * @return Relacion
     */
    public function setTiporelacion(\FormularioBundle\Entity\TipoRelacion $tiporelacion = null)
    {
        $this->tiporelacion = $tiporelacion;

        return $this;
    }

    /**
     * Get tiporelacion
     *
     * @return \FormularioBundle\Entity\TipoRelacion
     */
    public function getTiporelacion()
    {
        return $this->tiporelacion;
    }

    /**
     * Set tiporelacionversion
     *
     * @param \FormularioBundle\Entity\TipoRelacionVersion $tiporelacionversion
     *
     * @return Relacion
     */
    public function setTiporelacionversion(\FormularioBundle\Entity\TipoRelacionVersion $tiporelacionversion = null)
    {
        $this->tiporelacionversion = $tiporelacionversion;

        return $this;
    }

    /**
     * Get tiporelacionversion
     *
     * @return \FormularioBundle\Entity\TipoRelacionVersion
     */
    public function getTiporelacionversion()
    {
        return $this->tiporelacionversion;
    }
}
