<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Ticket;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('paymentMode')
            ->add('transport')
            ->add('price')
            ->add('destination')
            ->add('bookingDate', null, [
                'widget' => 'single_text',
                'html5' => false,
    'attr' => ['class' => 'js-datepicker']
            ])
            ->add('reservationRelation', EntityType::class, [
                'class' => Reservation::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
