<?php

namespace Proyecto\ActivosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StockActivoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('cantidad')
            ->add('eactivo', 'entity', array(
                  'class' => 'Proyecto\ActivosBundle\Entity\ElementosActivos',
                  'choice_label' => 'nombre',
                  'placeholder' => 'seleccione un elemento'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\ActivosBundle\Entity\StockActivo',
            'allow_extra_fields' => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'proyecto_activosbundle_stockactivo';
    }
}
