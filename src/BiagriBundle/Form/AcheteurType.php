<?php

namespace BiagriBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AcheteurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('societe', 'text', array('label' => 'Societé'))
            ->add('nom', 'text', array('label' => 'Nom'))
            ->add('prenom', 'text', array('label' => 'Prénom'))
            ->add('adresse', 'text', array('label' => 'Adresse'))
            ->add('cp', 'text', array('label' => 'Code Postal'))
            ->add('ville', 'text', array('label' => 'Ville'))
            ->add('tel', 'text', array('label' => 'Téléphone'))
            ->add('mail', 'text', array(
                'label' => 'email',
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BiagriBundle\Entity\Acheteur'
        ));
    }
}
