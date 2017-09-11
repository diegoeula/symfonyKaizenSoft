<?php

namespace FormularioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class JuzgadoForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('descripcion', TextType::class, array('required' => false,
                    'label'=>'Descripcion',
                    'attr' => array('class' => 'form-control input-md','placeholder'=>'Descripción'),
                    ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'FormularioBundle\Entity\Juzgado',));
    }

}
