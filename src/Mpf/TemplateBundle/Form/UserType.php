<?php

namespace Mpf\TemplateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username', TextType::class, array('required' => false, 'label' => 'Usuario', 'empty_data' => null, 'attr' => array('class' => 'form-control input-sm'),))
                ->add('isActive', CheckboxType::class, array('required' => false, 'label' => 'Activo?', 'empty_data' => null, 'attr' => array('class' => 'form-control input-sm'),))
                ->add('isAdmin', CheckboxType::class, array('required' => false, 'label' => 'Administrador?', 'empty_data' => null, 'attr' => array('class' => 'form-control input-sm'),))
                ->add('name', TextType::class, array('required' => false, 'label' => 'Nombre', 'empty_data' => null, 'attr' => array('class' => 'form-control input-sm'),))
                ->add('fiscalia', TextType::class, array('required' => false, 'label' => 'Fiscalía', 'empty_data' => null, 'attr' => array('class' => 'form-control input-sm'),))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Mpf\TemplateBundle\Entity\User'
        ));
    }

}
