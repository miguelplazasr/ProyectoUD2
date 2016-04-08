<?php

namespace Proyecto\ActivosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PrestamoActivoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('fechaPrestamo')
            //->add('fechaDevolucion')
            ->add('sactivo', 'entity', array(
                'class' => 'ActivosBundle:StockActivo',
                'choice_label' => 'id',
                'placeholder' => 'Seleccione un elemento'
            ))
            ->add('users', 'entity', array(
                'class' => 'AdminBundle:Usuarios',
                'choice_label' => 'id',
                'placeholder' => 'seleccione un usuario'
            ))
            ->add('cantidad')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\ActivosBundle\Entity\PrestamoActivo',
            'allow_extra_fields' => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'proyecto_activosbundle_prestamoactivo';
    }
}
