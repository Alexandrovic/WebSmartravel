<?php

namespace Travel\AgenceBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PropositionType extends VoyageType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
           parent::buildForm($builder, $options);

    // On supprime celui qu'on ne veut pas dans le formulaire de modification
    $builder->remove('programme');
    $builder->remove('itineraire');
    $builder->remove('image');
    $builder->remove('respoAgence');    
    $builder->setAttribute('type','Proposition');
   

  
    
    
    }
    
//    /**
//     * @param OptionsResolverInterface $resolver
//     */
//    public function setDefaultOptions(OptionsResolverInterface $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => 'Travel\AgenceBundle\Entity\Voyage'
//        ));
//    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'travel_agencebundle_proposition';
    }
}
