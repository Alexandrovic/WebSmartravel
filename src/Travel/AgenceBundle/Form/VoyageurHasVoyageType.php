<?php

namespace Travel\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VoyageurHasVoyageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('voyageur')
            ->add('voyage')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Travel\AgenceBundle\Entity\VoyageurHasVoyage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'travel_agencebundle_voyageurhasvoyage';
    }
}
