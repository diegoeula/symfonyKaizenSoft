<?php

namespace Mpf\TemplateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FuncionalidadType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('funcionalidadNombre')
                ->add('funcionalidadDescripcion')
                ->add('funcionalidadRoute')
                ->add('funcionalidadPadre')
                ->add('funcionalidadOrden')
                ->add('isAdmin')
                ->add('icon')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Mpf\TemplateBundle\Entity\Funcionalidad'
        ));
    }

}
