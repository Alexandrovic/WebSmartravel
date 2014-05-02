<?php

namespace Travel\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RespoAgenceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('cin')
            ->add('eMail')
            ->add('password')
            ->add('dateInscription')
            ->add('nomAgence')
            ->add('active')
            ->add('commentaire')
            ->add('region')
            ->add('longitude')
            ->add('latitude')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Travel\AgenceBundle\Entity\RespoAgence'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'travel_agencebundle_respoagence';
    }
}
