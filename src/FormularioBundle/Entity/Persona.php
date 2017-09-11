<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Persona
 *
 * @ORM\Table(name="transportedivisas.Persona")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\PersonaRepository")
 */
class Persona {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="TipoPersonaProcesal")
     * @ORM\JoinColumn(name="tipopersonaprocesal", referencedColumnName="id")
     */
    private $tipopersonaprocesal;

    /**
     * @ORM\ManyToOne(targetEntity="TipoPersona")
     * @ORM\JoinColumn(name="tipopersona", referencedColumnName="id")
     */
    private $tipopersona;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoimputado", type="string", length=255, nullable=true)
     */
    private $apellidoimputado;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreimputado", type="string", length=255, nullable=true)
     */
    private $nombreimputado;

    /**
     * @ORM\ManyToOne(targetEntity="TipoIdentificacion")
     * @ORM\JoinColumn(name="tipoidentificacion", referencedColumnName="id")
     */
    private $tipoidentificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroidentificacion", type="string", length=255, nullable=true)
     */
    private $numeroidentificacion;

    /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="paisidentificacion", referencedColumnName="id")
     */
    private $paisidentificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="cuitimputado", type="string", length=255, nullable=true)
     */
    private $cuitimputado;

     /**
     * @ManyToMany(targetEntity="Pais", cascade={"persist"})
     * @JoinTable(name="transportedivisas.personaPais",
     *      joinColumns={@JoinColumn(name="persona_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="pais_id", referencedColumnName="id")}
     *      )
     * */
    private $nacionalidad;

    /**
     * @ORM\ManyToOne(targetEntity="Sexo")
     * @ORM\JoinColumn(name="sexo", referencedColumnName="id")
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilioimputado", type="string", length=255, nullable=true)
     */
    private $domicilioimputado;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonoimputado", type="string", length=255, nullable=true)
     */
    private $telefonoimputado;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudadresidencia", type="string", length=500, nullable=true)
     */
    private $ciudadresidencia;

    /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="paisresidencia", referencedColumnName="id")
     */
    private $paisresidencia;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nacionalidad = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set apellidoimputado
     *
     * @param string $apellidoimputado
     *
     * @return Persona
     */
    public function setApellidoimputado($apellidoimputado)
    {
        $this->apellidoimputado = $apellidoimputado;

        return $this;
    }

    /**
     * Get apellidoimputado
     *
     * @return string
     */
    public function getApellidoimputado()
    {
        return $this->apellidoimputado;
    }

    /**
     * Set nombreimputado
     *
     * @param string $nombreimputado
     *
     * @return Persona
     */
    public function setNombreimputado($nombreimputado)
    {
        $this->nombreimputado = $nombreimputado;

        return $this;
    }

    /**
     * Get nombreimputado
     *
     * @return string
     */
    public function getNombreimputado()
    {
        return $this->nombreimputado;
    }

    /**
     * Set numeroidentificacion
     *
     * @param string $numeroidentificacion
     *
     * @return Persona
     */
    public function setNumeroidentificacion($numeroidentificacion)
    {
        $this->numeroidentificacion = $numeroidentificacion;

        return $this;
    }

    /**
     * Get numeroidentificacion
     *
     * @return string
     */
    public function getNumeroidentificacion()
    {
        return $this->numeroidentificacion;
    }

    /**
     * Set cuitimputado
     *
     * @param string $cuitimputado
     *
     * @return Persona
     */
    public function setCuitimputado($cuitimputado)
    {
        $this->cuitimputado = $cuitimputado;

        return $this;
    }

    /**
     * Get cuitimputado
     *
     * @return string
     */
    public function getCuitimputado()
    {
        return $this->cuitimputado;
    }

    /**
     * Set domicilioimputado
     *
     * @param string $domicilioimputado
     *
     * @return Persona
     */
    public function setDomicilioimputado($domicilioimputado)
    {
        $this->domicilioimputado = $domicilioimputado;

        return $this;
    }

    /**
     * Get domicilioimputado
     *
     * @return string
     */
    public function getDomicilioimputado()
    {
        return $this->domicilioimputado;
    }

    /**
     * Set telefonoimputado
     *
     * @param string $telefonoimputado
     *
     * @return Persona
     */
    public function setTelefonoimputado($telefonoimputado)
    {
        $this->telefonoimputado = $telefonoimputado;

        return $this;
    }

    /**
     * Get telefonoimputado
     *
     * @return string
     */
    public function getTelefonoimputado()
    {
        return $this->telefonoimputado;
    }

    /**
     * Set ciudadresidencia
     *
     * @param string $ciudadresidencia
     *
     * @return Persona
     */
    public function setCiudadresidencia($ciudadresidencia)
    {
        $this->ciudadresidencia = $ciudadresidencia;

        return $this;
    }

    /**
     * Get ciudadresidencia
     *
     * @return string
     */
    public function getCiudadresidencia()
    {
        return $this->ciudadresidencia;
    }

    /**
     * Set tipopersonaprocesal
     *
     * @param \FormularioBundle\Entity\TipoPersonaProcesal $tipopersonaprocesal
     *
     * @return Persona
     */
    public function setTipopersonaprocesal(\FormularioBundle\Entity\TipoPersonaProcesal $tipopersonaprocesal = null)
    {
        $this->tipopersonaprocesal = $tipopersonaprocesal;

        return $this;
    }

    /**
     * Get tipopersonaprocesal
     *
     * @return \FormularioBundle\Entity\TipoPersonaProcesal
     */
    public function getTipopersonaprocesal()
    {
        return $this->tipopersonaprocesal;
    }

    /**
     * Set tipopersona
     *
     * @param \FormularioBundle\Entity\TipoPersona $tipopersona
     *
     * @return Persona
     */
    public function setTipopersona(\FormularioBundle\Entity\TipoPersona $tipopersona = null)
    {
        $this->tipopersona = $tipopersona;

        return $this;
    }

    /**
     * Get tipopersona
     *
     * @return \FormularioBundle\Entity\TipoPersona
     */
    public function getTipopersona()
    {
        return $this->tipopersona;
    }

    /**
     * Set tipoidentificacion
     *
     * @param \FormularioBundle\Entity\TipoIdentificacion $tipoidentificacion
     *
     * @return Persona
     */
    public function setTipoidentificacion(\FormularioBundle\Entity\TipoIdentificacion $tipoidentificacion = null)
    {
        $this->tipoidentificacion = $tipoidentificacion;

        return $this;
    }

    /**
     * Get tipoidentificacion
     *
     * @return \FormularioBundle\Entity\TipoIdentificacion
     */
    public function getTipoidentificacion()
    {
        return $this->tipoidentificacion;
    }

    /**
     * Set paisidentificacion
     *
     * @param \FormularioBundle\Entity\Pais $paisidentificacion
     *
     * @return Persona
     */
    public function setPaisidentificacion(\FormularioBundle\Entity\Pais $paisidentificacion = null)
    {
        $this->paisidentificacion = $paisidentificacion;

        return $this;
    }

    /**
     * Get paisidentificacion
     *
     * @return \FormularioBundle\Entity\Pais
     */
    public function getPaisidentificacion()
    {
        return $this->paisidentificacion;
    }

    /**
     * Add nacionalidad
     *
     * @param \FormularioBundle\Entity\Pais $nacionalidad
     *
     * @return Persona
     */
    public function addNacionalidad(\FormularioBundle\Entity\Pais $nacionalidad)
    {
        $this->nacionalidad[] = $nacionalidad;

        return $this;
    }

    /**
     * Remove nacionalidad
     *
     * @param \FormularioBundle\Entity\Pais $nacionalidad
     */
    public function removeNacionalidad(\FormularioBundle\Entity\Pais $nacionalidad)
    {
        $this->nacionalidad->removeElement($nacionalidad);
    }

    /**
     * Get nacionalidad
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set sexo
     *
     * @param \FormularioBundle\Entity\Sexo $sexo
     *
     * @return Persona
     */
    public function setSexo(\FormularioBundle\Entity\Sexo $sexo = null)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return \FormularioBundle\Entity\Sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set paisresidencia
     *
     * @param \FormularioBundle\Entity\Pais $paisresidencia
     *
     * @return Persona
     */
    public function setPaisresidencia(\FormularioBundle\Entity\Pais $paisresidencia = null)
    {
        $this->paisresidencia = $paisresidencia;

        return $this;
    }

    /**
     * Get paisresidencia
     *
     * @return \FormularioBundle\Entity\Pais
     */
    public function getPaisresidencia()
    {
        return $this->paisresidencia;
    }
}
