<?php

namespace FormularioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RelacionForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('personaorigen', TextType::class, array('required' => false, 'label' => 'Persona origen', 'attr' => array('class' => 'form-control input-md')))
                ->add('personadestino', TextType::class, array('required' => false, 'label' => 'Persona destino', 'attr' => array('class' => 'form-control input-md')))
                ->add('tiporelacion', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoRelacion',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo relación',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('tiporelacionversion', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoRelacionVersion',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Versión',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('observacion', TextareaType::class, array('required' => false, 'label' => 'Observación', 'attr' => array('class' => 'form-control input-md', 'rows' => '5')))

        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FormularioBundle\Entity\Relacion',));
    }

}
