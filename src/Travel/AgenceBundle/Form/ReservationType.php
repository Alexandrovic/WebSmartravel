<?php

namespace Travel\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReservationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('dateReservation')
                ->add('payement')
                ->add('voyage')
                ->add('voyageur')
                ->add('facture')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Travel\AgenceBundle\Entity\Reservation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'travel_agencebundle_reservation';
    }

}
