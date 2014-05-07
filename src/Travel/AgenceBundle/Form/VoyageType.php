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
            ->add('moyenTransport')
            ->add('destination')
            ->add('budget')
            ->add('nbPlace')
            ->add('programme')
            ->add('itineraire')
            ->add('dateDepart')
            ->add('dateRetour')
            ->add('type')
            ->add('typesortie')
            ->add('image')
            ->add('respoAgence')
            ->add('hotelId')
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
