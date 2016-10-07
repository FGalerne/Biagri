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
                    'placeholder'=>'Ex: Zouk machine'
                )))
            ->add('nom', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: Doe'
                )))
            ->add('prenom', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: Paul'
                )))
            ->add('adresse', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 45 rue du chateau'
                )))
            ->add('cp', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 28240'
                )))
            ->add('ville', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: La loupe'
                )))
            ->add('tel', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: 0237881855'
                )))
            ->add('mail', TextType::class, array(
                'attr'=>array(
                    'placeholder'=>'Ex: baba@zoumba.fr'
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
