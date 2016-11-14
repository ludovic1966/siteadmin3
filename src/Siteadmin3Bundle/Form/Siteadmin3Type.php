<?php

namespace Siteadmin3Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Siteadmin3Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('image1')
            ->add('file1', 'file', array('label' => 'Inserer/modifier la premère image de l accordéon', 'required' => false))
            ->add('image2')
            ->add('file2', 'file', array('label' => 'Inserer/modifier la deuxième image de l accordéon', 'required' => false))
            ->add('image3')
            ->add('file3', 'file', array('label' => 'Inserer/modifier la troisème image de l accordéon', 'required' => false))
            
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siteadmin3Bundle\Entity\Siteadmin3'
        ));
    }
}
