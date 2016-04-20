<?php

namespace Proyecto\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileFormType extends AbstractType
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
        return 'fos_user_profile';
    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }


    // For Symfony 2.x

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
