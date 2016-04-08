<?php

namespace Proyecto\EnfermeriaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReporteEmergenciaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('id')
            ->add('detalle')
            ->add('users', 'entity', array(
                'class' => 'Proyecto\AdminBundle\Entity\Usuarios',
                'choice_label' => 'id',
                'placeholder' => 'Seleccione un usuario'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\EnfermeriaBundle\Entity\ReporteEmergencia',
            'allow_extra_fields' => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'proyecto_enfermeriabundle_reporteemergencia';
    }
}
