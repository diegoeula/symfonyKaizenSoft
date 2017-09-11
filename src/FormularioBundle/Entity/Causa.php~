<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Causa
 *
 * @ORM\Table(name="transportedivisas.causa")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\CausaRepository")
 */
class Causa {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumn(name="provincia", referencedColumnName="id")
     */
    private $provincia;

    /**
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumn(name="ciudad", referencedColumnName="id")
     */
    private $ciudad;

    /**
     * @ORM\ManyToOne(targetEntity="DistritoFiscal")
     * @ORM\JoinColumn(name="distritofiscal", referencedColumnName="id")
     */
    private $distritofiscal;

    /**
     * @ORM\ManyToOne(targetEntity="Juzgado")
     * @ORM\JoinColumn(name="juzgado", referencedColumnName="id")
     */
    private $juzgado;

    /**
     * @ORM\ManyToOne(targetEntity="Fiscalia")
     * @ORM\JoinColumn(name="fiscalia", referencedColumnName="id")
     */
    private $fiscalia;

    /**
     * @var string
     *
     * @ORM\Column(name="nrocausa", type="string", length=255, nullable=true)
     */
    private $nrocausa;

    /**
     * @var string
     *
     * @ORM\Column(name="caratula", type="string", length=2048, nullable=true)
     */
    private $caratula;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="datetime", nullable=true)
     */
    private $fechainicio;

    /**
     * @ManyToMany(targetEntity="EstadoProcesal", cascade={"persist"})
     * @JoinTable(name="transportedivisas.causaEstadoProcesal",
     *      joinColumns={@JoinColumn(name="causa_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="estadoprocesal_id", referencedColumnName="id")}
     *      )
     * */
    private $estadoprocesal;

    /**
     * @ManyToMany(targetEntity="Hecho", cascade={"persist"})
     * @JoinTable(name="transportedivisas.causaHecho",
     *      joinColumns={@JoinColumn(name="causa_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="hecho_id", referencedColumnName="id")}
     *      )
     * */
    private $hechos;

    /**
     * @ManyToMany(targetEntity="Persona", cascade={"persist"})
     * @JoinTable(name="transportedivisas.CausaPersona",
     *      joinColumns={@JoinColumn(name="causa_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="persona_id", referencedColumnName="id")}
     *      )
     * */
    private $personas;

    /**
     * @var string
     *
     * @ORM\Column(name="investigacionpersonalpatrimonial", type="string", length=2048, nullable=true)
     */
    private $investigacionpersonalpatrimonial;

    /**
     * @var bool
     *
     * @ORM\Column(name="otracausa", type="boolean", nullable=true)
     */
    private $otracausa;

    /**
     * @ManyToMany(targetEntity="OtrasCausas", cascade={"persist"})
     * @JoinTable(name="transportedivisas.causaOtrasCausas",
     *      joinColumns={@JoinColumn(name="causa_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="otrascausas_id", referencedColumnName="id")}
     *      )
     * */
    private $otrascausas;

    /**
     * @var string
     *
     * @ORM\Column(name="procedenciageograficaimputado", type="string", length=2048, nullable=true)
     */
    private $procedenciageograficaimputado;

    /**
     * @var string
     *
     * @ORM\Column(name="procedenciageograficacausa", type="string", length=2048, nullable=true)
     */
    private $procedenciageograficacausa;

    /**
     * @var string
     *
     * @ORM\Column(name="origenproptenenciadineroimputado", type="string", length=2048, nullable=true)
     */
    private $origenproptenenciadineroimputado;

    /**
     * @var string
     *
     * @ORM\Column(name="origenproptenenciadinerocausa", type="string", length=2048, nullable=true)
     */
    private $origenproptenenciadinerocausa;

    /**
     * @var string
     *
     * @ORM\Column(name="destinogeograficoimputado", type="string", length=2048, nullable=true)
     */
    private $destinogeograficoimputado;

    /**
     * @var string
     *
     * @ORM\Column(name="destinogeograficocausa", type="string", length=2048, nullable=true)
     */
    private $destinogeograficocausa;

    /**
     * @var string
     *
     * @ORM\Column(name="destinodineroimputado", type="string", length=2048, nullable=true)
     */
    private $destinodineroimputado;

    /**
     * @var string
     *
     * @ORM\Column(name="destinodinerocausa", type="string", length=2048, nullable=true)
     */
    private $destinodinerocausa;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fiscaliaIngreso;

    /**
     * @var bool
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="usuariocarga", type="string", nullable=true)
     */
    private $usuariocarga;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacarga", type="datetime", nullable=true)
     */
    private $fechacarga;

    /**
     * @var string
     *
     * @ORM\Column(name="usuariomodificacion", type="string", nullable=true)
     */
    private $usuariomodificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechamodificacion", type="datetime", nullable=true)
     */
    private $fechamodificacion;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estadoprocesal = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hechos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->personas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->otrascausas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nrocausa
     *
     * @param string $nrocausa
     *
     * @return Causa
     */
    public function setNrocausa($nrocausa)
    {
        $this->nrocausa = $nrocausa;

        return $this;
    }

    /**
     * Get nrocausa
     *
     * @return string
     */
    public function getNrocausa()
    {
        return $this->nrocausa;
    }

    /**
     * Set caratula
     *
     * @param string $caratula
     *
     * @return Causa
     */
    public function setCaratula($caratula)
    {
        $this->caratula = $caratula;

        return $this;
    }

    /**
     * Get caratula
     *
     * @return string
     */
    public function getCaratula()
    {
        return $this->caratula;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     *
     * @return Causa
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set investigacionpersonalpatrimonial
     *
     * @param string $investigacionpersonalpatrimonial
     *
     * @return Causa
     */
    public function setInvestigacionpersonalpatrimonial($investigacionpersonalpatrimonial)
    {
        $this->investigacionpersonalpatrimonial = $investigacionpersonalpatrimonial;

        return $this;
    }

    /**
     * Get investigacionpersonalpatrimonial
     *
     * @return string
     */
    public function getInvestigacionpersonalpatrimonial()
    {
        return $this->investigacionpersonalpatrimonial;
    }

    /**
     * Set otracausa
     *
     * @param boolean $otracausa
     *
     * @return Causa
     */
    public function setOtracausa($otracausa)
    {
        $this->otracausa = $otracausa;

        return $this;
    }

    /**
     * Get otracausa
     *
     * @return boolean
     */
    public function getOtracausa()
    {
        return $this->otracausa;
    }

    /**
     * Set procedenciageograficaimputado
     *
     * @param string $procedenciageograficaimputado
     *
     * @return Causa
     */
    public function setProcedenciageograficaimputado($procedenciageograficaimputado)
    {
        $this->procedenciageograficaimputado = $procedenciageograficaimputado;

        return $this;
    }

    /**
     * Get procedenciageograficaimputado
     *
     * @return string
     */
    public function getProcedenciageograficaimputado()
    {
        return $this->procedenciageograficaimputado;
    }

    /**
     * Set procedenciageograficacausa
     *
     * @param string $procedenciageograficacausa
     *
     * @return Causa
     */
    public function setProcedenciageograficacausa($procedenciageograficacausa)
    {
        $this->procedenciageograficacausa = $procedenciageograficacausa;

        return $this;
    }

    /**
     * Get procedenciageograficacausa
     *
     * @return string
     */
    public function getProcedenciageograficacausa()
    {
        return $this->procedenciageograficacausa;
    }

    /**
     * Set origenproptenenciadineroimputado
     *
     * @param string $origenproptenenciadineroimputado
     *
     * @return Causa
     */
    public function setOrigenproptenenciadineroimputado($origenproptenenciadineroimputado)
    {
        $this->origenproptenenciadineroimputado = $origenproptenenciadineroimputado;

        return $this;
    }

    /**
     * Get origenproptenenciadineroimputado
     *
     * @return string
     */
    public function getOrigenproptenenciadineroimputado()
    {
        return $this->origenproptenenciadineroimputado;
    }

    /**
     * Set origenproptenenciadinerocausa
     *
     * @param string $origenproptenenciadinerocausa
     *
     * @return Causa
     */
    public function setOrigenproptenenciadinerocausa($origenproptenenciadinerocausa)
    {
        $this->origenproptenenciadinerocausa = $origenproptenenciadinerocausa;

        return $this;
    }

    /**
     * Get origenproptenenciadinerocausa
     *
     * @return string
     */
    public function getOrigenproptenenciadinerocausa()
    {
        return $this->origenproptenenciadinerocausa;
    }

    /**
     * Set destinogeograficoimputado
     *
     * @param string $destinogeograficoimputado
     *
     * @return Causa
     */
    public function setDestinogeograficoimputado($destinogeograficoimputado)
    {
        $this->destinogeograficoimputado = $destinogeograficoimputado;

        return $this;
    }

    /**
     * Get destinogeograficoimputado
     *
     * @return string
     */
    public function getDestinogeograficoimputado()
    {
        return $this->destinogeograficoimputado;
    }

    /**
     * Set destinogeograficocausa
     *
     * @param string $destinogeograficocausa
     *
     * @return Causa
     */
    public function setDestinogeograficocausa($destinogeograficocausa)
    {
        $this->destinogeograficocausa = $destinogeograficocausa;

        return $this;
    }

    /**
     * Get destinogeograficocausa
     *
     * @return string
     */
    public function getDestinogeograficocausa()
    {
        return $this->destinogeograficocausa;
    }

    /**
     * Set destinodineroimputado
     *
     * @param string $destinodineroimputado
     *
     * @return Causa
     */
    public function setDestinodineroimputado($destinodineroimputado)
    {
        $this->destinodineroimputado = $destinodineroimputado;

        return $this;
    }

    /**
     * Get destinodineroimputado
     *
     * @return string
     */
    public function getDestinodineroimputado()
    {
        return $this->destinodineroimputado;
    }

    /**
     * Set destinodinerocausa
     *
     * @param string $destinodinerocausa
     *
     * @return Causa
     */
    public function setDestinodinerocausa($destinodinerocausa)
    {
        $this->destinodinerocausa = $destinodinerocausa;

        return $this;
    }

    /**
     * Get destinodinerocausa
     *
     * @return string
     */
    public function getDestinodinerocausa()
    {
        return $this->destinodinerocausa;
    }

    /**
     * Set fiscaliaIngreso
     *
     * @param integer $fiscaliaIngreso
     *
     * @return Causa
     */
    public function setFiscaliaIngreso($fiscaliaIngreso)
    {
        $this->fiscaliaIngreso = $fiscaliaIngreso;

        return $this;
    }

    /**
     * Get fiscaliaIngreso
     *
     * @return integer
     */
    public function getFiscaliaIngreso()
    {
        return $this->fiscaliaIngreso;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Causa
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set usuariocarga
     *
     * @param string $usuariocarga
     *
     * @return Causa
     */
    public function setUsuariocarga($usuariocarga)
    {
        $this->usuariocarga = $usuariocarga;

        return $this;
    }

    /**
     * Get usuariocarga
     *
     * @return string
     */
    public function getUsuariocarga()
    {
        return $this->usuariocarga;
    }

    /**
     * Set fechacarga
     *
     * @param \DateTime $fechacarga
     *
     * @return Causa
     */
    public function setFechacarga($fechacarga)
    {
        $this->fechacarga = $fechacarga;

        return $this;
    }

    /**
     * Get fechacarga
     *
     * @return \DateTime
     */
    public function getFechacarga()
    {
        return $this->fechacarga;
    }

    /**
     * Set usuariomodificacion
     *
     * @param string $usuariomodificacion
     *
     * @return Causa
     */
    public function setUsuariomodificacion($usuariomodificacion)
    {
        $this->usuariomodificacion = $usuariomodificacion;

        return $this;
    }

    /**
     * Get usuariomodificacion
     *
     * @return string
     */
    public function getUsuariomodificacion()
    {
        return $this->usuariomodificacion;
    }

    /**
     * Set fechamodificacion
     *
     * @param \DateTime $fechamodificacion
     *
     * @return Causa
     */
    public function setFechamodificacion($fechamodificacion)
    {
        $this->fechamodificacion = $fechamodificacion;

        return $this;
    }

    /**
     * Get fechamodificacion
     *
     * @return \DateTime
     */
    public function getFechamodificacion()
    {
        return $this->fechamodificacion;
    }

    /**
     * Set provincia
     *
     * @param \FormularioBundle\Entity\Provincia $provincia
     *
     * @return Causa
     */
    public function setProvincia(\FormularioBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \FormularioBundle\Entity\Provincia
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set ciudad
     *
     * @param \FormularioBundle\Entity\Ciudad $ciudad
     *
     * @return Causa
     */
    public function setCiudad(\FormularioBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \FormularioBundle\Entity\Ciudad
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set distritofiscal
     *
     * @param \FormularioBundle\Entity\DistritoFiscal $distritofiscal
     *
     * @return Causa
     */
    public function setDistritofiscal(\FormularioBundle\Entity\DistritoFiscal $distritofiscal = null)
    {
        $this->distritofiscal = $distritofiscal;

        return $this;
    }

    /**
     * Get distritofiscal
     *
     * @return \FormularioBundle\Entity\DistritoFiscal
     */
    public function getDistritofiscal()
    {
        return $this->distritofiscal;
    }

    /**
     * Set juzgado
     *
     * @param \FormularioBundle\Entity\Juzgado $juzgado
     *
     * @return Causa
     */
    public function setJuzgado(\FormularioBundle\Entity\Juzgado $juzgado = null)
    {
        $this->juzgado = $juzgado;

        return $this;
    }

    /**
     * Get juzgado
     *
     * @return \FormularioBundle\Entity\Juzgado
     */
    public function getJuzgado()
    {
        return $this->juzgado;
    }

    /**
     * Set fiscalia
     *
     * @param \FormularioBundle\Entity\Fiscalia $fiscalia
     *
     * @return Causa
     */
    public function setFiscalia(\FormularioBundle\Entity\Fiscalia $fiscalia = null)
    {
        $this->fiscalia = $fiscalia;

        return $this;
    }

    /**
     * Get fiscalia
     *
     * @return \FormularioBundle\Entity\Fiscalia
     */
    public function getFiscalia()
    {
        return $this->fiscalia;
    }

    /**
     * Add estadoprocesal
     *
     * @param \FormularioBundle\Entity\EstadoProcesal $estadoprocesal
     *
     * @return Causa
     */
    public function addEstadoprocesal(\FormularioBundle\Entity\EstadoProcesal $estadoprocesal)
    {
        $this->estadoprocesal[] = $estadoprocesal;

        return $this;
    }

    /**
     * Remove estadoprocesal
     *
     * @param \FormularioBundle\Entity\EstadoProcesal $estadoprocesal
     */
    public function removeEstadoprocesal(\FormularioBundle\Entity\EstadoProcesal $estadoprocesal)
    {
        $this->estadoprocesal->removeElement($estadoprocesal);
    }

    /**
     * Get estadoprocesal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEstadoprocesal()
    {
        return $this->estadoprocesal;
    }

    /**
     * Add hecho
     *
     * @param \FormularioBundle\Entity\Hecho $hecho
     *
     * @return Causa
     */
    public function addHecho(\FormularioBundle\Entity\Hecho $hecho)
    {
        $this->hechos[] = $hecho;

        return $this;
    }

    /**
     * Remove hecho
     *
     * @param \FormularioBundle\Entity\Hecho $hecho
     */
    public function removeHecho(\FormularioBundle\Entity\Hecho $hecho)
    {
        $this->hechos->removeElement($hecho);
    }

    /**
     * Get hechos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHechos()
    {
        return $this->hechos;
    }

    /**
     * Add persona
     *
     * @param \FormularioBundle\Entity\Persona $persona
     *
     * @return Causa
     */
    public function addPersona(\FormularioBundle\Entity\Persona $persona)
    {
        $this->personas[] = $persona;

        return $this;
    }

    /**
     * Remove persona
     *
     * @param \FormularioBundle\Entity\Persona $persona
     */
    public function removePersona(\FormularioBundle\Entity\Persona $persona)
    {
        $this->personas->removeElement($persona);
    }

    /**
     * Get personas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonas()
    {
        return $this->personas;
    }

    /**
     * Add otrascausa
     *
     * @param \FormularioBundle\Entity\OtrasCausas $otrascausa
     *
     * @return Causa
     */
    public function addOtrascausa(\FormularioBundle\Entity\OtrasCausas $otrascausa)
    {
        $this->otrascausas[] = $otrascausa;

        return $this;
    }

    /**
     * Remove otrascausa
     *
     * @param \FormularioBundle\Entity\OtrasCausas $otrascausa
     */
    public function removeOtrascausa(\FormularioBundle\Entity\OtrasCausas $otrascausa)
    {
        $this->otrascausas->removeElement($otrascausa);
    }

    /**
     * Get otrascausas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOtrascausas()
    {
        return $this->otrascausas;
    }
}
