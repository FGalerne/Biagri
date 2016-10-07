<?php

namespace BiagriBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class OffreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('produits', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: Blé'
                )))
            ->add('proteines', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'en %'
                )))
            ->add('ps', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'en kg/hectolitres'
                )))
            ->add('humidite', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'en %'
                )))
            ->add('hagberg', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'en secondes'
                )))
            ->add('livraison', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: Rouen'
                )))
            ->add('societe', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 150'
                )))
            ->add('nom', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 150'
                )))
            ->add('prenom', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 150'
                )))
            ->add('adresse', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 150'
                )))
            ->add('cp', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 150'
                )))
            ->add('ville', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 150'
                )))
            ->add('tel', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 150'
                )))
            ->add('mail', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 150'
                )))
            ->add('prixOffre', TextType::class, array(
            'attr'=>array(
            'placeholder'=>'Ex: 150'
            )));


            
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BiagriBundle\Entity\Offre'
        ));
    }
}
