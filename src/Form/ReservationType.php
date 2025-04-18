<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Destination\Destination;
use App\Entity\Transport;
use App\Entity\Driver;
use App\Entity\Agent;
use App\Repository\TransportRepository;
use App\Repository\DriverRepository;
use App\Repository\AgentRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime())->format('Y-m-d\TH:i')
                ]
            ])
            ->add('destination', EntityType::class, [
                'class' => Destination::class,
                'choice_label' => 'name',
                'placeholder' => 'Select a destination',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('d')
                        ->orderBy('d.name', 'ASC');
                },
                'attr' => [
                    'class' => 'form-select',
                    'data-location-target' => 'select' 
                ]
            ])
            ->add('seats', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'min' => 1,
                    'max' => 10
                ]
            ])
           ->add ('paymentMode', ChoiceType::class, [
                'choices' => [
                    'Credit Card' => 'credit_card',
                    'Cash' => 'cash',
                    'Bank Transfer' => 'bank_transfer',
                ],
                'placeholder' => 'Select a payment mode',
                'attr' => ['class' => 'form-select']
            ])
            ->add('driver', EntityType::class, [
                'class' => Driver::class,
                'choice_label' => 'name',
                'required' => false
            ])
            ->add('transport', EntityType::class, [
                'class' => Transport::class,
                'choice_label' => 'type',
                'placeholder' => 'Select a transport',
                'attr' => ['class' => 'form-select']
            ])
            ->add('agent', EntityType::class, [
                'class' => Agent::class,
                'choice_label' => function (Agent $agent) {
                    return $agent->getName() . ' (' . $agent->getType() . ')';
                },
                'placeholder' => 'Select an agent',
                'attr' => ['class' => 'form-select']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
