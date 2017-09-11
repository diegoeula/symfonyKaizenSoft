<?php

namespace FormularioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Hecho
 *
 * @ORM\Table(name="transportedivisas.Hecho")
 * @ORM\Entity(repositoryClass="FormularioBundle\Repository\HechoRepository")
 */
class Hecho {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AutoridadControlPrevencion")
     * @ORM\JoinColumn(name="autoridadcontrolprevencion", referencedColumnName="id")
     */
    private $autoridadcontrolprevencion;

    /**
     * @ORM\ManyToOne(targetEntity="TipoProcedimiento")
     * @ORM\JoinColumn(name="tipoprocedimiento", referencedColumnName="id")
     */
    private $tipoprocedimiento;

    /**
     * @ORM\ManyToOne(targetEntity="Lugar")
     * @ORM\JoinColumn(name="lugar", referencedColumnName="id")
     */
    private $lugar;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @ORM\ManyToOne(targetEntity="DireccionCruce")
     * @ORM\JoinColumn(name="direccioncruce", referencedColumnName="id")
     */
    private $direccioncruce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaingresopais", type="datetime", nullable=true)
     */
    private $fechaingresopais;

    /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="paisprocedencia", referencedColumnName="id")
     */
    private $paisprocedencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaegresopais", type="datetime", nullable=true)
     */
    private $fechaegresopais;

    /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="paisdestino", referencedColumnName="id")
     */
    private $paisdestino;

    /**
     * @ORM\ManyToOne(targetEntity="ModoTraslado")
     * @ORM\JoinColumn(name="modotraslado", referencedColumnName="id")
     */
    private $modotraslado;

    /**
     * @ORM\ManyToOne(targetEntity="TipoVehiculoParticular")
     * @ORM\JoinColumn(name="tipovehiculoparticular", referencedColumnName="id")
     */
    private $tipovehiculoparticular;

    /**
     * @ORM\ManyToOne(targetEntity="Marca")
     * @ORM\JoinColumn(name="marca", referencedColumnName="id")
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=255, nullable=true)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="patente", type="string", length=255, nullable=true)
     */
    private $patente;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", length=255, nullable=true)
     */
    private $titular;

    /**
     * @var string
     *
     * @ORM\Column(name="dnititular", type="string", length=255, nullable=true)
     */
    private $dnititular;

    /**
     * @var string
     *
     * @ORM\Column(name="cuittitular", type="string", length=255, nullable=true)
     */
    private $cuittitular;

    /**
     * @ORM\ManyToOne(targetEntity="TipoTransporte")
     * @ORM\JoinColumn(name="tipotransporte", referencedColumnName="id")
     */
    private $tipotransporte;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudadorigen", type="string", length=255, nullable=true)
     */
    private $ciudadorigen;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudaddestino", type="string", length=255, nullable=true)
     */
    private $ciudaddestino;

    /**
     * @ORM\ManyToOne(targetEntity="EmpresaTransporteAereo")
     * @ORM\JoinColumn(name="empresatransporteaereo", referencedColumnName="id")
     */
    private $empresatransporteaereo;

    /**
     * @var string
     *
     * @ORM\Column(name="numerovuelo", type="string", length=255, nullable=true)
     */
    private $numerovuelo;

    /**
     * @ORM\ManyToOne(targetEntity="EmpresaTransporteTerrestre")
     * @ORM\JoinColumn(name="empresatransporteterrestre", referencedColumnName="id")
     */
    private $empresatransporteterrestre;

    /**
     * @var string
     *
     * @ORM\Column(name="patentetransporteterrestre", type="string", length=255, nullable=true)
     */
    private $patentetransporteterrestre;

    /**
     * @ORM\ManyToOne(targetEntity="TipoValorTransportado")
     * @ORM\JoinColumn(name="tipovalortransportado", referencedColumnName="id")
     */
    private $tipovalortransportado;

    /**
     * @ORM\ManyToOne(targetEntity="Moneda")
     * @ORM\JoinColumn(name="moneda", referencedColumnName="id")
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidaddinero", type="string", length=255, nullable=true)
     */
    private $cantidaddinero;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidadtotaldinero", type="string", length=255, nullable=true)
     */
    private $cantidadtotaldinero;

    /**
     * @ORM\ManyToOne(targetEntity="ModalidadTraslado")
     * @ORM\JoinColumn(name="modalidadtraslado", referencedColumnName="id")
     */
    private $modalidadtraslado;

    /**
     * @ORM\ManyToOne(targetEntity="Ocultamiento")
     * @ORM\JoinColumn(name="ocultamiento", referencedColumnName="id")
     */
    private $ocultamiento;

    /**
     * @ORM\ManyToOne(targetEntity="DeclaracionAnteAduana")
     * @ORM\JoinColumn(name="declaracionanteaduana", referencedColumnName="id")
     */
    private $declaracionanteaduana;

    /**
     * @var string
     *
     * @ORM\Column(name="montodeclarado", type="string", length=255, nullable=true)
     */
    private $montodeclarado;

    /**
     * @ORM\ManyToOne(targetEntity="MercaderiasProhibidasContrabando")
     * @ORM\JoinColumn(name="mercaderiasprohibidascontrabando", referencedColumnName="id")
     */
    private $mercaderiasprohibidascontrabando;

    /**
     * @ORM\ManyToOne(targetEntity="TipoMercaderia")
     * @ORM\JoinColumn(name="tipomercaderia", referencedColumnName="id")
     */
    private $tipomercaderia;

    /**
     * @var string
     *
     * @ORM\Column(name="detallemercaderia", type="string", length=2048, nullable=true)
     */
    private $detallemercaderia;

    /**
     * @var bool
     *
     * @ORM\Column(name="tenenciadocumentacionfalsa", type="boolean", nullable=true)
     */
    private $tenenciadocumentacionfalsa;

    /**
     * @var bool
     *
     * @ORM\Column(name="presentaciondocumentacionfalsa", type="boolean", nullable=true)
     */
    private $presentaciondocumentacionfalsa;

    /**
     * @ORM\ManyToOne(targetEntity="TipoDocumentacionFalsa")
     * @ORM\JoinColumn(name="tipodocumentacionfalsa", referencedColumnName="id")
     */
    private $tipodocumentacionfalsa;

    /**
     * @var string
     *
     * @ORM\Column(name="detalledocumentacion", type="string", length=2048, nullable=true)
     */
    private $detalledocumentacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="movimientomigratoriosultimos5", type="boolean", nullable=true)
     */
    private $movimientomigratoriosultimos5;

    /**
     * @ORM\ManyToOne(targetEntity="DireccionMovimientoMigratorios")
     * @ORM\JoinColumn(name="direccionmovimientomigratorios", referencedColumnName="id")
     */
    private $direccionmovimientomigratorios;

    /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="paisorigen", referencedColumnName="id")
     */
    private $paisorigen;

    /**
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumn(name="paisddestino", referencedColumnName="id")
     */
    private $paisddestino;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaentradaargentina", type="datetime", nullable=true)
     */
    private $fechaentradaargentina;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaegresoargentina", type="datetime", nullable=true)
     */
    private $fechaegresoargentina;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=2048, nullable=true)
     */
    private $observaciones;



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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Hecho
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set fechaingresopais
     *
     * @param \DateTime $fechaingresopais
     *
     * @return Hecho
     */
    public function setFechaingresopais($fechaingresopais)
    {
        $this->fechaingresopais = $fechaingresopais;

        return $this;
    }

    /**
     * Get fechaingresopais
     *
     * @return \DateTime
     */
    public function getFechaingresopais()
    {
        return $this->fechaingresopais;
    }

    /**
     * Set fechaegresopais
     *
     * @param \DateTime $fechaegresopais
     *
     * @return Hecho
     */
    public function setFechaegresopais($fechaegresopais)
    {
        $this->fechaegresopais = $fechaegresopais;

        return $this;
    }

    /**
     * Get fechaegresopais
     *
     * @return \DateTime
     */
    public function getFechaegresopais()
    {
        return $this->fechaegresopais;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Hecho
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set patente
     *
     * @param string $patente
     *
     * @return Hecho
     */
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get patente
     *
     * @return string
     */
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Set titular
     *
     * @param string $titular
     *
     * @return Hecho
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set dnititular
     *
     * @param string $dnititular
     *
     * @return Hecho
     */
    public function setDnititular($dnititular)
    {
        $this->dnititular = $dnititular;

        return $this;
    }

    /**
     * Get dnititular
     *
     * @return string
     */
    public function getDnititular()
    {
        return $this->dnititular;
    }

    /**
     * Set cuittitular
     *
     * @param string $cuittitular
     *
     * @return Hecho
     */
    public function setCuittitular($cuittitular)
    {
        $this->cuittitular = $cuittitular;

        return $this;
    }

    /**
     * Get cuittitular
     *
     * @return string
     */
    public function getCuittitular()
    {
        return $this->cuittitular;
    }

    /**
     * Set ciudadorigen
     *
     * @param string $ciudadorigen
     *
     * @return Hecho
     */
    public function setCiudadorigen($ciudadorigen)
    {
        $this->ciudadorigen = $ciudadorigen;

        return $this;
    }

    /**
     * Get ciudadorigen
     *
     * @return string
     */
    public function getCiudadorigen()
    {
        return $this->ciudadorigen;
    }

    /**
     * Set ciudaddestino
     *
     * @param string $ciudaddestino
     *
     * @return Hecho
     */
    public function setCiudaddestino($ciudaddestino)
    {
        $this->ciudaddestino = $ciudaddestino;

        return $this;
    }

    /**
     * Get ciudaddestino
     *
     * @return string
     */
    public function getCiudaddestino()
    {
        return $this->ciudaddestino;
    }

    /**
     * Set numerovuelo
     *
     * @param string $numerovuelo
     *
     * @return Hecho
     */
    public function setNumerovuelo($numerovuelo)
    {
        $this->numerovuelo = $numerovuelo;

        return $this;
    }

    /**
     * Get numerovuelo
     *
     * @return string
     */
    public function getNumerovuelo()
    {
        return $this->numerovuelo;
    }

    /**
     * Set patentetransporteterrestre
     *
     * @param string $patentetransporteterrestre
     *
     * @return Hecho
     */
    public function setPatentetransporteterrestre($patentetransporteterrestre)
    {
        $this->patentetransporteterrestre = $patentetransporteterrestre;

        return $this;
    }

    /**
     * Get patentetransporteterrestre
     *
     * @return string
     */
    public function getPatentetransporteterrestre()
    {
        return $this->patentetransporteterrestre;
    }

    /**
     * Set cantidaddinero
     *
     * @param string $cantidaddinero
     *
     * @return Hecho
     */
    public function setCantidaddinero($cantidaddinero)
    {
        $this->cantidaddinero = $cantidaddinero;

        return $this;
    }

    /**
     * Get cantidaddinero
     *
     * @return string
     */
    public function getCantidaddinero()
    {
        return $this->cantidaddinero;
    }

    /**
     * Set cantidadtotaldinero
     *
     * @param string $cantidadtotaldinero
     *
     * @return Hecho
     */
    public function setCantidadtotaldinero($cantidadtotaldinero)
    {
        $this->cantidadtotaldinero = $cantidadtotaldinero;

        return $this;
    }

    /**
     * Get cantidadtotaldinero
     *
     * @return string
     */
    public function getCantidadtotaldinero()
    {
        return $this->cantidadtotaldinero;
    }

    /**
     * Set montodeclarado
     *
     * @param string $montodeclarado
     *
     * @return Hecho
     */
    public function setMontodeclarado($montodeclarado)
    {
        $this->montodeclarado = $montodeclarado;

        return $this;
    }

    /**
     * Get montodeclarado
     *
     * @return string
     */
    public function getMontodeclarado()
    {
        return $this->montodeclarado;
    }

    /**
     * Set detallemercaderia
     *
     * @param string $detallemercaderia
     *
     * @return Hecho
     */
    public function setDetallemercaderia($detallemercaderia)
    {
        $this->detallemercaderia = $detallemercaderia;

        return $this;
    }

    /**
     * Get detallemercaderia
     *
     * @return string
     */
    public function getDetallemercaderia()
    {
        return $this->detallemercaderia;
    }

    /**
     * Set tenenciadocumentacionfalsa
     *
     * @param boolean $tenenciadocumentacionfalsa
     *
     * @return Hecho
     */
    public function setTenenciadocumentacionfalsa($tenenciadocumentacionfalsa)
    {
        $this->tenenciadocumentacionfalsa = $tenenciadocumentacionfalsa;

        return $this;
    }

    /**
     * Get tenenciadocumentacionfalsa
     *
     * @return boolean
     */
    public function getTenenciadocumentacionfalsa()
    {
        return $this->tenenciadocumentacionfalsa;
    }

    /**
     * Set presentaciondocumentacionfalsa
     *
     * @param boolean $presentaciondocumentacionfalsa
     *
     * @return Hecho
     */
    public function setPresentaciondocumentacionfalsa($presentaciondocumentacionfalsa)
    {
        $this->presentaciondocumentacionfalsa = $presentaciondocumentacionfalsa;

        return $this;
    }

    /**
     * Get presentaciondocumentacionfalsa
     *
     * @return boolean
     */
    public function getPresentaciondocumentacionfalsa()
    {
        return $this->presentaciondocumentacionfalsa;
    }

    /**
     * Set detalledocumentacion
     *
     * @param string $detalledocumentacion
     *
     * @return Hecho
     */
    public function setDetalledocumentacion($detalledocumentacion)
    {
        $this->detalledocumentacion = $detalledocumentacion;

        return $this;
    }

    /**
     * Get detalledocumentacion
     *
     * @return string
     */
    public function getDetalledocumentacion()
    {
        return $this->detalledocumentacion;
    }

    /**
     * Set movimientomigratoriosultimos5
     *
     * @param boolean $movimientomigratoriosultimos5
     *
     * @return Hecho
     */
    public function setMovimientomigratoriosultimos5($movimientomigratoriosultimos5)
    {
        $this->movimientomigratoriosultimos5 = $movimientomigratoriosultimos5;

        return $this;
    }

    /**
     * Get movimientomigratoriosultimos5
     *
     * @return boolean
     */
    public function getMovimientomigratoriosultimos5()
    {
        return $this->movimientomigratoriosultimos5;
    }

    /**
     * Set fechaentradaargentina
     *
     * @param \DateTime $fechaentradaargentina
     *
     * @return Hecho
     */
    public function setFechaentradaargentina($fechaentradaargentina)
    {
        $this->fechaentradaargentina = $fechaentradaargentina;

        return $this;
    }

    /**
     * Get fechaentradaargentina
     *
     * @return \DateTime
     */
    public function getFechaentradaargentina()
    {
        return $this->fechaentradaargentina;
    }

    /**
     * Set fechaegresoargentina
     *
     * @param \DateTime $fechaegresoargentina
     *
     * @return Hecho
     */
    public function setFechaegresoargentina($fechaegresoargentina)
    {
        $this->fechaegresoargentina = $fechaegresoargentina;

        return $this;
    }

    /**
     * Get fechaegresoargentina
     *
     * @return \DateTime
     */
    public function getFechaegresoargentina()
    {
        return $this->fechaegresoargentina;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Hecho
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set autoridadcontrolprevencion
     *
     * @param \FormularioBundle\Entity\AutoridadControlPrevencion $autoridadcontrolprevencion
     *
     * @return Hecho
     */
    public function setAutoridadcontrolprevencion(\FormularioBundle\Entity\AutoridadControlPrevencion $autoridadcontrolprevencion = null)
    {
        $this->autoridadcontrolprevencion = $autoridadcontrolprevencion;

        return $this;
    }

    /**
     * Get autoridadcontrolprevencion
     *
     * @return \FormularioBundle\Entity\AutoridadControlPrevencion
     */
    public function getAutoridadcontrolprevencion()
    {
        return $this->autoridadcontrolprevencion;
    }

    /**
     * Set tipoprocedimiento
     *
     * @param \FormularioBundle\Entity\TipoProcedimiento $tipoprocedimiento
     *
     * @return Hecho
     */
    public function setTipoprocedimiento(\FormularioBundle\Entity\TipoProcedimiento $tipoprocedimiento = null)
    {
        $this->tipoprocedimiento = $tipoprocedimiento;

        return $this;
    }

    /**
     * Get tipoprocedimiento
     *
     * @return \FormularioBundle\Entity\TipoProcedimiento
     */
    public function getTipoprocedimiento()
    {
        return $this->tipoprocedimiento;
    }

    /**
     * Set lugar
     *
     * @param \FormularioBundle\Entity\Lugar $lugar
     *
     * @return Hecho
     */
    public function setLugar(\FormularioBundle\Entity\Lugar $lugar = null)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return \FormularioBundle\Entity\Lugar
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set direccioncruce
     *
     * @param \FormularioBundle\Entity\DireccionCruce $direccioncruce
     *
     * @return Hecho
     */
    public function setDireccioncruce(\FormularioBundle\Entity\DireccionCruce $direccioncruce = null)
    {
        $this->direccioncruce = $direccioncruce;

        return $this;
    }

    /**
     * Get direccioncruce
     *
     * @return \FormularioBundle\Entity\DireccionCruce
     */
    public function getDireccioncruce()
    {
        return $this->direccioncruce;
    }

    /**
     * Set paisprocedencia
     *
     * @param \FormularioBundle\Entity\Pais $paisprocedencia
     *
     * @return Hecho
     */
    public function setPaisprocedencia(\FormularioBundle\Entity\Pais $paisprocedencia = null)
    {
        $this->paisprocedencia = $paisprocedencia;

        return $this;
    }

    /**
     * Get paisprocedencia
     *
     * @return \FormularioBundle\Entity\Pais
     */
    public function getPaisprocedencia()
    {
        return $this->paisprocedencia;
    }

    /**
     * Set paisdestino
     *
     * @param \FormularioBundle\Entity\Pais $paisdestino
     *
     * @return Hecho
     */
    public function setPaisdestino(\FormularioBundle\Entity\Pais $paisdestino = null)
    {
        $this->paisdestino = $paisdestino;

        return $this;
    }

    /**
     * Get paisdestino
     *
     * @return \FormularioBundle\Entity\Pais
     */
    public function getPaisdestino()
    {
        return $this->paisdestino;
    }

    /**
     * Set modotraslado
     *
     * @param \FormularioBundle\Entity\ModoTraslado $modotraslado
     *
     * @return Hecho
     */
    public function setModotraslado(\FormularioBundle\Entity\ModoTraslado $modotraslado = null)
    {
        $this->modotraslado = $modotraslado;

        return $this;
    }

    /**
     * Get modotraslado
     *
     * @return \FormularioBundle\Entity\ModoTraslado
     */
    public function getModotraslado()
    {
        return $this->modotraslado;
    }

    /**
     * Set tipovehiculoparticular
     *
     * @param \FormularioBundle\Entity\TipoVehiculoParticular $tipovehiculoparticular
     *
     * @return Hecho
     */
    public function setTipovehiculoparticular(\FormularioBundle\Entity\TipoVehiculoParticular $tipovehiculoparticular = null)
    {
        $this->tipovehiculoparticular = $tipovehiculoparticular;

        return $this;
    }

    /**
     * Get tipovehiculoparticular
     *
     * @return \FormularioBundle\Entity\TipoVehiculoParticular
     */
    public function getTipovehiculoparticular()
    {
        return $this->tipovehiculoparticular;
    }

    /**
     * Set marca
     *
     * @param \FormularioBundle\Entity\Marca $marca
     *
     * @return Hecho
     */
    public function setMarca(\FormularioBundle\Entity\Marca $marca = null)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return \FormularioBundle\Entity\Marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set tipotransporte
     *
     * @param \FormularioBundle\Entity\TipoTransporte $tipotransporte
     *
     * @return Hecho
     */
    public function setTipotransporte(\FormularioBundle\Entity\TipoTransporte $tipotransporte = null)
    {
        $this->tipotransporte = $tipotransporte;

        return $this;
    }

    /**
     * Get tipotransporte
     *
     * @return \FormularioBundle\Entity\TipoTransporte
     */
    public function getTipotransporte()
    {
        return $this->tipotransporte;
    }

    /**
     * Set empresatransporteaereo
     *
     * @param \FormularioBundle\Entity\EmpresaTransporteAereo $empresatransporteaereo
     *
     * @return Hecho
     */
    public function setEmpresatransporteaereo(\FormularioBundle\Entity\EmpresaTransporteAereo $empresatransporteaereo = null)
    {
        $this->empresatransporteaereo = $empresatransporteaereo;

        return $this;
    }

    /**
     * Get empresatransporteaereo
     *
     * @return \FormularioBundle\Entity\EmpresaTransporteAereo
     */
    public function getEmpresatransporteaereo()
    {
        return $this->empresatransporteaereo;
    }

    /**
     * Set empresatransporteterrestre
     *
     * @param \FormularioBundle\Entity\EmpresaTransporteTerrestre $empresatransporteterrestre
     *
     * @return Hecho
     */
    public function setEmpresatransporteterrestre(\FormularioBundle\Entity\EmpresaTransporteTerrestre $empresatransporteterrestre = null)
    {
        $this->empresatransporteterrestre = $empresatransporteterrestre;

        return $this;
    }

    /**
     * Get empresatransporteterrestre
     *
     * @return \FormularioBundle\Entity\EmpresaTransporteTerrestre
     */
    public function getEmpresatransporteterrestre()
    {
        return $this->empresatransporteterrestre;
    }

    /**
     * Set tipovalortransportado
     *
     * @param \FormularioBundle\Entity\TipoValorTransportado $tipovalortransportado
     *
     * @return Hecho
     */
    public function setTipovalortransportado(\FormularioBundle\Entity\TipoValorTransportado $tipovalortransportado = null)
    {
        $this->tipovalortransportado = $tipovalortransportado;

        return $this;
    }

    /**
     * Get tipovalortransportado
     *
     * @return \FormularioBundle\Entity\TipoValorTransportado
     */
    public function getTipovalortransportado()
    {
        return $this->tipovalortransportado;
    }

    /**
     * Set moneda
     *
     * @param \FormularioBundle\Entity\Moneda $moneda
     *
     * @return Hecho
     */
    public function setMoneda(\FormularioBundle\Entity\Moneda $moneda = null)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return \FormularioBundle\Entity\Moneda
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set modalidadtraslado
     *
     * @param \FormularioBundle\Entity\ModalidadTraslado $modalidadtraslado
     *
     * @return Hecho
     */
    public function setModalidadtraslado(\FormularioBundle\Entity\ModalidadTraslado $modalidadtraslado = null)
    {
        $this->modalidadtraslado = $modalidadtraslado;

        return $this;
    }

    /**
     * Get modalidadtraslado
     *
     * @return \FormularioBundle\Entity\ModalidadTraslado
     */
    public function getModalidadtraslado()
    {
        return $this->modalidadtraslado;
    }

    /**
     * Set ocultamiento
     *
     * @param \FormularioBundle\Entity\Ocultamiento $ocultamiento
     *
     * @return Hecho
     */
    public function setOcultamiento(\FormularioBundle\Entity\Ocultamiento $ocultamiento = null)
    {
        $this->ocultamiento = $ocultamiento;

        return $this;
    }

    /**
     * Get ocultamiento
     *
     * @return \FormularioBundle\Entity\Ocultamiento
     */
    public function getOcultamiento()
    {
        return $this->ocultamiento;
    }

    /**
     * Set declaracionanteaduana
     *
     * @param \FormularioBundle\Entity\DeclaracionAnteAduana $declaracionanteaduana
     *
     * @return Hecho
     */
    public function setDeclaracionanteaduana(\FormularioBundle\Entity\DeclaracionAnteAduana $declaracionanteaduana = null)
    {
        $this->declaracionanteaduana = $declaracionanteaduana;

        return $this;
    }

    /**
     * Get declaracionanteaduana
     *
     * @return \FormularioBundle\Entity\DeclaracionAnteAduana
     */
    public function getDeclaracionanteaduana()
    {
        return $this->declaracionanteaduana;
    }

    /**
     * Set mercaderiasprohibidascontrabando
     *
     * @param \FormularioBundle\Entity\MercaderiasProhibidasContrabando $mercaderiasprohibidascontrabando
     *
     * @return Hecho
     */
    public function setMercaderiasprohibidascontrabando(\FormularioBundle\Entity\MercaderiasProhibidasContrabando $mercaderiasprohibidascontrabando = null)
    {
        $this->mercaderiasprohibidascontrabando = $mercaderiasprohibidascontrabando;

        return $this;
    }

    /**
     * Get mercaderiasprohibidascontrabando
     *
     * @return \FormularioBundle\Entity\MercaderiasProhibidasContrabando
     */
    public function getMercaderiasprohibidascontrabando()
    {
        return $this->mercaderiasprohibidascontrabando;
    }

    /**
     * Set tipomercaderia
     *
     * @param \FormularioBundle\Entity\TipoMercaderia $tipomercaderia
     *
     * @return Hecho
     */
    public function setTipomercaderia(\FormularioBundle\Entity\TipoMercaderia $tipomercaderia = null)
    {
        $this->tipomercaderia = $tipomercaderia;

        return $this;
    }

    /**
     * Get tipomercaderia
     *
     * @return \FormularioBundle\Entity\TipoMercaderia
     */
    public function getTipomercaderia()
    {
        return $this->tipomercaderia;
    }

    /**
     * Set tipodocumentacionfalsa
     *
     * @param \FormularioBundle\Entity\TipoDocumentacionFalsa $tipodocumentacionfalsa
     *
     * @return Hecho
     */
    public function setTipodocumentacionfalsa(\FormularioBundle\Entity\TipoDocumentacionFalsa $tipodocumentacionfalsa = null)
    {
        $this->tipodocumentacionfalsa = $tipodocumentacionfalsa;

        return $this;
    }

    /**
     * Get tipodocumentacionfalsa
     *
     * @return \FormularioBundle\Entity\TipoDocumentacionFalsa
     */
    public function getTipodocumentacionfalsa()
    {
        return $this->tipodocumentacionfalsa;
    }

    /**
     * Set direccionmovimientomigratorios
     *
     * @param \FormularioBundle\Entity\DireccionMovimientoMigratorios $direccionmovimientomigratorios
     *
     * @return Hecho
     */
    public function setDireccionmovimientomigratorios(\FormularioBundle\Entity\DireccionMovimientoMigratorios $direccionmovimientomigratorios = null)
    {
        $this->direccionmovimientomigratorios = $direccionmovimientomigratorios;

        return $this;
    }

    /**
     * Get direccionmovimientomigratorios
     *
     * @return \FormularioBundle\Entity\DireccionMovimientoMigratorios
     */
    public function getDireccionmovimientomigratorios()
    {
        return $this->direccionmovimientomigratorios;
    }

    /**
     * Set paisorigen
     *
     * @param \FormularioBundle\Entity\Pais $paisorigen
     *
     * @return Hecho
     */
    public function setPaisorigen(\FormularioBundle\Entity\Pais $paisorigen = null)
    {
        $this->paisorigen = $paisorigen;

        return $this;
    }

    /**
     * Get paisorigen
     *
     * @return \FormularioBundle\Entity\Pais
     */
    public function getPaisorigen()
    {
        return $this->paisorigen;
    }

    /**
     * Set paisddestino
     *
     * @param \FormularioBundle\Entity\Pais $paisddestino
     *
     * @return Hecho
     */
    public function setPaisddestino(\FormularioBundle\Entity\Pais $paisddestino = null)
    {
        $this->paisddestino = $paisddestino;

        return $this;
    }

    /**
     * Get paisddestino
     *
     * @return \FormularioBundle\Entity\Pais
     */
    public function getPaisddestino()
    {
        return $this->paisddestino;
    }
}
