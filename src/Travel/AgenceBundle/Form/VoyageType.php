<?php

namespace Travel\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VoyageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('moyenTransport', 'choice', array(
                'empty_value' => 'Choisissez un trasport',
                'choices' => array(
                    'Voiture location ' => 'Voiture location',
                    'Autobus touristique' => 'Autobus touristique',
                    'Avion' => 'Avion',
                    ),
                'required'  => false,
                ))
            ->add('destination', 'choice', array(
                'empty_value' => 'Choisissez une Destination',
                'choices' => array(
                    'Hammamet' => 'Hammamet',
                    'Djerba' => 'Djerba',
                    'Sousse' => 'Sousse',
                    'Sud tunisien' => 'Sud tunisien',
                    'Yasmine Hammamet' => 'Yasmine Hammamet'
                    ),
                'required'  => false,
                ))
            ->add('budget')
            ->add('nbPlace')
            ->add('programme','textarea', array(
                    'attr' => array(
                    'class' => 'tinymce',
                    'data-theme' => 'simple')))
            ->add('itineraire')
            ->add('dateDepart')
            ->add('dateRetour')
            ->add('type','choice', array(
                    'choices' => array(
                    'Proposition' => 'Proposition',
                    'Offre' => 'Offre',
                    'Annonce' => 'Annonce',
                   ),
                'required'  => true,
                ) )
            ->add('typesortie','choice', array(
                    'choices' => array(
                    'Sejour' => 'Sejour',
                    'Weekend' => 'Weekend',
                    'Randonnee' => 'Randonnee',
                    'Vacances' => 'Vacances',
                    'Voyage du noce' => 'Voyage du noce'    
                    ),
                'required'  => true,
                ))
            ->add('image')
            ->add('respoAgence')
            ->add('hotel')
            ->add('voyageur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Travel\AgenceBundle\Entity\Voyage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'travel_agencebundle_voyage';
    }
}
