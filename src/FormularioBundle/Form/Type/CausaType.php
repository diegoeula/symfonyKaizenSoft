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
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

//use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class CausaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder
                ->add('provincia', EntityType::class, array(
                    'class' => 'FormularioBundle:Provincia',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Provincia donde tramita la causa',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('ciudad', EntityType::class, array(
                    'class' => 'FormularioBundle:Ciudad',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Ciudad donde tramita la causa',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('distritofiscal', EntityType::class, array(
                    'class' => 'FormularioBundle:DistritoFiscal',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Distrito fiscal donde tramita la causa',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('juzgado', EntityType::class, array(
                    'class' => 'FormularioBundle:Juzgado',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Juzgado o tribunal donde tramita la causa',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('fiscalia', EntityType::class, array(
                    'class' => 'FormularioBundle:Fiscalia',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Fiscalía donde tramita la causa',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('nrocausa', TextType::class, array(
                    'required' => false,
                    'label' => 'Número de causa',
                    'attr' => array('class' => 'form-control input-md'),
                ))
                ->add('caratula', TextareaType::class, array('required' => false, 'label' => 'Carátula de la causa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('fechainicio', DateTimeType::class, array(
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy HH:mm',
                    'label' => 'Fecha de inicio de la causa',
                    'attr' => array('class' => 'form-control input-md fecha'),
                    'required' => false,))
                ->add('estadoprocesal', EntityType::class, array(
                    'class' => 'FormularioBundle:EstadoProcesal',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'multiple' => true,
                    'label' => 'Estado procesal de la causa',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('hechos', EntityType::class, array(
                    'class' => 'FormularioBundle:Hecho',
                    'choice_label' => 'id',
                    'multiple' => true,
                    'empty_data' => null,
                    'required' => false,
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('personas', EntityType::class, array(
                    'class' => 'FormularioBundle:Persona',
                    'choice_label' => 'id',
                    'multiple' => true,
                    'empty_data' => null,
                    'required' => false,
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('investigacionpersonalpatrimonial', TextareaType::class, array('required' => false, 'label' => 'Investigación personal y patrimonial', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
//                ->add('relaciones', EntityType::class, array(
//                    'class' => 'FormularioBundle:Relacion',
//                    'choice_label' => 'id',
//                    'multiple' => true,
//                    'empty_data' => null,
//                    'required' => false,
//                    'attr' => array('class' => 'form-control input-md chosen-select'),
//                ))
                ->add('otracausa', ChoiceType::class, array(
                    'choices' => array(
                        'Si' => true,
                        'No' => false,
                    ),
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Relaciones con otras causas por delitos de criminalidad organizada',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('otrascausas', EntityType::class, array(
                    'class' => 'FormularioBundle:OtrasCausas',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'multiple' => true,
                    'label' => 'Otras Causas',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('procedenciageograficaimputado', TextareaType::class, array('required' => false, 'label' => 'Procedencia geográfica Versión del imputado/defensa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('procedenciageograficacausa', TextareaType::class, array('required' => false, 'label' => 'Procedencia geográfica Pruebas en la causa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('origenproptenenciadineroimputado', TextareaType::class, array('required' => false, 'label' => 'Origen, propiedad y tenencia del dinero (antes del transporte transfronterizo) Versión del imputado/defensa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('origenproptenenciadinerocausa', TextareaType::class, array('required' => false, 'label' => 'Origen, propiedad y tenencia del dinero (antes del transporte transfronterizo) Pruebas en la causa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('destinogeograficoimputado', TextareaType::class, array('required' => false, 'label' => 'Destino geográfico Versión del imputado/defensa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('destinogeograficocausa', TextareaType::class, array('required' => false, 'label' => 'Destino geográfico Pruebas en la causa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('destinodineroimputado', TextareaType::class, array('required' => false, 'label' => 'Destino del dinero (después del transporte transfronterizo) Versión del imputado/defensa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('destinodinerocausa', TextareaType::class, array('required' => false, 'label' => 'Destino del dinero (después del transporte transfronterizo) Pruebas en la causa', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))
                ->add('save', SubmitType::class, array('label' => 'Guardar Causa', 'attr' => array('class' => 'btn btn-success pull-center'),))
                ->add('save_volver', SubmitType::class, array('label' => 'Volver al menú', 'attr' => array('class' => 'btn btn-warning pull-center'),))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FormularioBundle\Entity\Causa',
            'allow_extra_fields' => true
        ));
    }

}
