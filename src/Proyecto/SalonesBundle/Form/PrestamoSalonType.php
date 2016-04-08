<?php

namespace Proyecto\SalonesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PrestamoSalonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('horario', 'choice', array(
                'choices' => array(
                    '1' => '6am a 8am',
                    '2' => '8am a 10am',
                    '3' => '10am a 12am',
                    '4' => '12m a 2pm',
                    '5' => '2pm a 4pm',
                    '6' => '4pm a 6pm',
                    '7' => '6pm a 8pm',
                    '8' => '8am a 10am',
                ),
                'choice_attr' => array(
                    'name' => 'horario'
                ),
                'placeholder' => 'seleccione un horario'
            ))
            ->add('observaciones')
            ->add('sala', 'entity', array(
                  'class' => 'Proyecto\SalonesBundle\Entity\Salones',
                  'choice_label' => 'nombreSala',
                  'placeholder' => 'seleccione un salon',
            ))
            ->add('users', 'entity', array(
                  'class' => 'Proyecto\AdminBundle\Entity\Usuarios',
                  'choice_label' => 'id',
                  'placeholder' => 'seleccione un usuario',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Proyecto\SalonesBundle\Entity\PrestamoSalon',
            'allow_extra_fields' => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return null;
    }
}
