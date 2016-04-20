<?php

namespace Proyecto\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('idCarnet')
            ->add('nombres')
            ->add('apellidos')
            //->add('salt')
            ->add('estado')
            ->add('file')
            //->add('foto')
            ->add('dependencia')
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }


    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }


    // For Symfony 2.x

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
