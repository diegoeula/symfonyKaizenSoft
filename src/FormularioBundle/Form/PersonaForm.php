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

class PersonaForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('tipopersona', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoPersona',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo de persona',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('apellidoimputado', TextType::class, array('required' => false, 'label' => 'Apellido del imputado', 'attr' => array('class' => 'form-control input-md')))
                ->add('nombreimputado', TextType::class, array('required' => false, 'label' => 'Nombre del imputado', 'attr' => array('class' => 'form-control input-md')))
                ->add('tipoidentificacion', EntityType::class, array(
                    'class' => 'FormularioBundle:TipoIdentificacion',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Tipo de identificación',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('numeroidentificacion', TextType::class, array('required' => false, 'label' => 'Número de identificación', 'attr' => array('class' => 'form-control input-md')))
                ->add('paisidentificacion', EntityType::class, array(
                    'class' => 'FormularioBundle:Pais',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'País de emisión de la identificación',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('cuitimputado', TextType::class, array('required' => false, 'label' => 'Número de CUIT', 'attr' => array('class' => 'form-control input-md')))
                ->add('nacionalidad', EntityType::class, array(
                    'class' => 'FormularioBundle:Pais',
                    'choice_label' => 'gentilicio',
                    'required' => false,
                    'multiple' => true,
                    'empty_data' => null,
                    'label' => 'Nacionalidad',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('sexo', EntityType::class, array(
                    'class' => 'FormularioBundle:Sexo',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'Sexo',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
                ->add('domicilioimputado', TextType::class, array('required' => false, 'label' => 'Domicilio', 'attr' => array('class' => 'form-control input-md')))
                ->add('telefonoimputado', TextType::class, array('required' => false, 'label' => 'Número de teléfono', 'attr' => array('class' => 'form-control input-md')))
                ->add('ciudadresidencia', TextType::class, array('required' => false, 'label' => 'Ciudad de residencia', 'attr' => array('class' => 'form-control input-md')))
                ->add('paisresidencia', EntityType::class, array(
                    'class' => 'FormularioBundle:Pais',
                    'choice_label' => 'descripcion',
                    'required' => false,
                    'empty_data' => null,
                    'label' => 'País de residencia',
                    'attr' => array('class' => 'form-control input-md chosen-select'),
                ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FormularioBundle\Entity\Persona',));
    }

}
