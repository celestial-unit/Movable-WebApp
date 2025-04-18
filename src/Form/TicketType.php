<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Ticket;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('paymentMode', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('transport', ChoiceType::class, [
                'choices' => [
                    'Bus' => 'bus',
                    'Train' => 'train', 
                    'Plane' => 'plane',
                    'Car' => 'car'
                ],
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('price', NumberType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'html5' => true,
                'scale' => 2
            ])
            ->add('destination', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false
            ])
            ->add('reservation', EntityType::class, [
                'class' => Reservation::class,
                'choice_label' => 'id',
                'attr' => ['class' => 'form-control'],
                'required' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}