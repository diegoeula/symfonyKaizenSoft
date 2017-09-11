<?php

namespace FormularioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Doctrine\ORM\EntityRepository;

class HechoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('autoridadcontrolprevencion', EntityType::class, array(
                    'class' => 'FormularioBundle:AutoridadControlPrevencion',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Fuerza de seguridad u organismo que participa de la detección del hecho',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('tipoprocedimiento', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoProcedimiento',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo de procedimiento en el que se detecta el hecho',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('lugar', EntityType::class, array(
                    'class' => 'FormularioBundle:Lugar',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Lugar de ocurrencia del procedimiento inicial',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('direccion', TextType::class, array('required' => false, 'label' => 'Especificar nombre de la ciudad, aeropuerto, paso fronterizo o lugar no autorizado o número de ruta', 'attr' => array('class' => 'form-control input-md')))
                ->add('direccioncruce', EntityType::class, array(
                    'class' => 'FormularioBundle:DireccionCruce',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Dirección o sentido en la que se produce el transporte transfronterizo desde o hacia Argentina',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('fechaingresopais', DateTimeType::class, array(
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy HH:mm',
                    'label' => 'Fecha de ingreso al país',
                    'required' => false,
                    'attr' => array('class' => 'form-control input-md fecha')
                ))
                ->add('paisprocedencia', EntityType::class, array(
                    'class' => 'FormularioBundle:Pais',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'País de procedencia donde embarcó el imputado',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('fechaegresopais', DateTimeType::class, array(
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy HH:mm',
                    'label' => 'Fecha de egreso del país',
                    'required' => false,
                    'attr' => array('class' => 'form-control input-md fecha')
                ))
                ->add('paisdestino', EntityType::class, array(
                    'class' => 'FormularioBundle:Pais',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'País de destino (Argentina, en caso de ingreso; en caso de egreso, país de destino inmediato)',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('modotraslado', EntityType::class, array(
                    'class' => 'FormularioBundle:ModoTraslado',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Modo de traslado de la persona que transporta el dinero',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('tipovehiculoparticular', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoVehiculoParticular',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo de vehículo particular',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('marca', EntityType::class, array(
                    'class' => 'FormularioBundle:Marca',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Marca del vehículo particular',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('modelo', TextType::class, array('required' => false, 'label' => 'Modelo del vehículo particular', 'attr' => array('class' => 'form-control input-md')))
                ->add('patente', TextType::class, array('required' => false, 'label' => 'Número de patente del vehículo particular', 'attr' => array('class' => 'form-control input-md')))
                ->add('titular', TextType::class, array('required' => false, 'label' => 'Nombre del titular del vehículo', 'attr' => array('class' => 'form-control input-md')))
                ->add('dnititular', TextType::class, array('required' => false, 'label' => 'DNI del titular del vehículo', 'attr' => array('class' => 'form-control input-md')))
                ->add('cuittitular', TextType::class, array('required' => false, 'label' => 'CUIT del titular del vehículo', 'attr' => array('class' => 'form-control input-md')))
                ->add('tipotransporte', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoTransporte',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo de transporte de pasajeros',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('ciudadorigen', TextType::class, array('required' => false, 'label' => 'Ciudad de procedencia donde embarcó el imputado', 'attr' => array('class' => 'form-control input-md')))
                ->add('ciudaddestino', TextType::class, array('required' => false, 'label' => 'Ciudad de destino inmediato del imputado', 'attr' => array('class' => 'form-control input-md')))
                ->add('empresatransporteaereo', EntityType::class, array(
                    'class' => 'FormularioBundle:EmpresaTransporteAereo',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Aerolínea prestadora del transporte aéreo',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('numerovuelo', TextType::class, array('required' => false, 'label' => 'Para transporte aéreo: número de vuelo', 'attr' => array('class' => 'form-control input-md')))
                ->add('empresatransporteterrestre', EntityType::class, array(
                    'class' => 'FormularioBundle:EmpresaTransporteTerrestre',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Empresa prestadora del transporte terrestre o fluvial',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('patentetransporteterrestre', TextType::class, array('required' => false, 'label' => 'Para transporte terrestre: patente del vehículo', 'attr' => array('class' => 'form-control input-md')))
                ->add('tipovalortransportado', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoValorTransportado',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo de valor transportado',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('moneda', EntityType::class, array(
                    'class' => 'FormularioBundle:Moneda',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo de moneda',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('cantidaddinero', TextType::class, array('required' => false, 'label' => 'Cantidad de dinero por denominación de los billetes', 'attr' => array('class' => 'form-control input-md')))
                ->add('cantidadtotaldinero', TextType::class, array('required' => false, 'label' => 'Cantidad de dinero por tipo y moneda', 'attr' => array('class' => 'form-control input-md money')))
                ->add('modalidadtraslado', EntityType::class, array(
                    'class' => 'FormularioBundle:ModalidadTraslado',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Modalidad de traslado del dinero',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('ocultamiento', EntityType::class, array(
                    'class' => 'FormularioBundle:Ocultamiento',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Para cada modalidad de traslado: ocultamiento del dinero',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('declaracionanteaduana', EntityType::class, array(
                    'class' => 'FormularioBundle:DeclaracionAnteAduana',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Declaración del dinero ante la Aduana',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('montodeclarado', TextType::class, array('required' => false, 'label' => 'Monto del dinero declarado', 'attr' => array('class' => 'form-control input-md money')))
                ->add('mercaderiasprohibidascontrabando', EntityType::class, array(
                    'class' => 'FormularioBundle:MercaderiasProhibidasContrabando',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Transporte de mercaderías prohibidas o cualquier tipo de mercadería de contrabando',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('tipomercaderia', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoMercaderia',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo de mercadería prohibida o de contrabando transportada además del dinero',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('detallemercaderia', TextareaType::class, array('required' => false, 'label' => 'Descripción de tipos, cantidades y otros datos sobre la mercadería prohibida o de contrabando', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('tenenciadocumentacionfalsa', ChoiceType::class, array(
                    'choices' => array(
                        'Si' => true,
                        'No' => false,
                    ),
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tenencia de documentación falsa, de identificación u otra',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('presentaciondocumentacionfalsa', ChoiceType::class, array(
                    'choices' => array(
                        'Si' => true,
                        'No' => false,
                    ),
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Presentación de documentación falsa, de identificación u otra',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('tipodocumentacionfalsa', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoDocumentacionFalsa',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo de documentación falsa',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('detalledocumentacion', TextareaType::class, array('required' => false, 'label' => 'Descripción de nombres, patentes, domicilios y otros datos acerca de la documentación falsa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('movimientomigratoriosultimos5', ChoiceType::class, array(
                    'choices' => array(
                        'Si' => true,
                        'No' => false,
                    ),
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Existencia de movimientos migratorios en los últimos 5 años previos al presente',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('direccionmovimientomigratorios', EntityType::class, array(
                    'class' => 'FormularioBundle:DireccionMovimientoMigratorios',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Para cada uno de los movimientos migratorios, dirección en la que se produce el movimiento migratorio desde o hacia Argentina',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('paisorigen', EntityType::class, array(
                    'class' => 'FormularioBundle:Pais',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Para los movimientos de entrada: país de origen',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('paisddestino', EntityType::class, array(
                    'class' => 'FormularioBundle:Pais',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Para los movimientos de salida: país de destino',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('fechaentradaargentina', DateTimeType::class, array(
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy HH:mm',
                    'label' => 'Fecha de entrada a Argentina',
                    'required' => false,
                    'attr' => array('class' => 'form-control input-md fecha')
                ))
                ->add('fechaegresoargentina', DateTimeType::class, array(
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy HH:mm',
                    'label' => 'Fecha de salida de Argentina',
                    'required' => false,
                    'attr' => array('class' => 'form-control input-md fecha')
                ))
                ->add('observaciones', TextareaType::class, array('required' => false, 'label' => 'Otras observaciones o comentarios que no hayan sido consignados anteriormente en este bloque', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('save_volver', SubmitType::class, array('label' => 'Volver', 'attr' => array('class' => 'btn btn-warning pull-center'),))
                ->add('save_local', SubmitType::class, array('label' => 'Guardar', 'attr' => array('class' => 'btn btn-info pull-center'),))
                ->add('save', SubmitType::class, array('label' => 'Guardar y Continuar', 'attr' => array('class' => 'btn btn-success pull-center'),))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FormularioBundle\Entity\Hecho'
        ));
    }

}
