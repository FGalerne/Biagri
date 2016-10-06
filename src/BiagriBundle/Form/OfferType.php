<?php

namespace BiagriBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class OfferType extends AbstractType
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
            ->add('prix', TextType::class, array(
                    'attr'=>array(
                        'placeholder'=>'Ex: 150'
                )))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BiagriBundle\Entity\Offer'
        ));
    }
}
