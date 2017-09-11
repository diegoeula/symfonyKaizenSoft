<?php

namespace FormularioBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Doctrine\ORM\EntityRepository;

class BuscadorType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('fiscalia', EntityType::class, array(
                    'class' => 'FormularioBundle:Referenciales\Fiscalia',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Fiscalía',
                    'multiple' => true,
                    'attr' => array('class' => 'form-control input-sm chosen-select'),
                    'query_builder' => function(EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.descripcion', 'ASC');
                    },
                ))
                ->add('areaanalisis', ChoiceType::class, array(
                    'mapped' => false,
                    'choices' => array(
                        'DAC' => 1,
                        'Rosario' => 4,
                        'Salta' => 3,
                        'Santiago del Estero' => 98,
                        'Mar del Plata' => 2,
                    ),
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Área de análisis',
                    'attr' => array('class' => 'form-control input-sm chosen-select'),
                ))
                ->add('modoinicio', EntityType::class, array(
                    'class' => 'FormularioBundle:ModoInicio',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Modo inicio',
                    'multiple' => true,
                    'attr' => array('class' => 'form-control input-sm chosen-select'),
                ))
                ->add('fuerzaSeguridad', EntityType::class, array(
                    'class' => 'FormularioBundle:Ffss',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'multiple' => true,
                    'label' => 'Fuerza de seguridad interviniente',
                    'attr' => array('class' => 'form-control input-sm chosen-select'),
                ))
                ->add('fechad', DateTimeType::class, array(
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy HH:mm',
                    'label' => 'Fecha y hora del hecho desde',
                    'required' => false,
                     'empty_data' => null,
                    'attr' => array('class' => 'form-control input-sm fecha')
                ))
                ->add('fechah', DateTimeType::class, array(
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy HH:mm',
                    'label' => 'Fecha y hora del hecho hasta',
                    'required' => false,
                     'empty_data' => null,
                    'attr' => array('class' => 'form-control input-sm fecha')
                ))
                ->add('direccion', TextType::class, array('required' => false,
                    'label' => 'Dirección',
                     'empty_data' => null,
                    'attr' => array('class' => 'form-control input-sm'), //, 'onkeypress' => 'buscar()'),
                ))
                ->add('tipo', EntityType::class, array(
                    'class' => 'FormularioBundle:Estupefaciente',
                    'choice_label' => 'tipo',
                    'required' => false,
                    'empty_data' => null,
                    'multiple' => true,
                    'label' => 'Tipo de droga / precursores químicos',
                    'attr' => array('class' => 'form-control input-sm chosen-select'),
                        )
                )

        ;
    }

}
