<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Transport;
use App\Entity\Driver;
use App\Entity\Agent;
use App\Entity\Destination;
use App\Repository\TransportRepository;
use App\Repository\DriverRepository;
use App\Repository\AgentRepository;
use App\Repository\DestinationRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('current_step', HiddenType::class, [
            'data' => 1,
            'mapped' => false
        ]) 
           
            // Step 1: Transport selection
            ->add('transport', EntityType::class, [
                'class' => Transport::class,
                'choice_label' => 'type',
                'placeholder' => 'Select a transport',
                'query_builder' => function (TransportRepository $er) {
                    return $er->createQueryBuilder('t')
                        //->where('t.disponibility = :available')  // Comment out this line temporarily
                        //->setParameter('available', 'available')
                        ->orderBy('t.type', 'ASC');
                },
                'attr' => ['class' => 'form-select']
            ])
            
            // Step 2: Driver selection
            ->add('driver', EntityType::class, [
                'class' => Driver::class,
                'choice_label' => 'name',
                'placeholder' => 'Select a driver (optional)',
                'required' => false,
                'attr' => ['class' => 'form-select']
            ])
            
            // Step 3: Agent selection
            ->add('agent', EntityType::class, [
                'class' => Agent::class,
                'choice_label' => function (Agent $agent) {
                    return $agent->getName() . ' (' . $agent->getType() . ')';
                },
                'placeholder' => 'Select an agent',
                'query_builder' => function (AgentRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->orderBy('a.name', 'ASC');
                },
                'attr' => ['class' => 'form-select']
            ])
            
            // Step 4: Destination and other details
            ->add('destination', EntityType::class, [
                'class' => Destination::class,
                'choice_label' => 'name',
                'placeholder' => 'Select destination'
                
            ])
            
            // Personal details
            ->add('firstName', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('lastName', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('email', EmailType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('age', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'min' => 1]
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control']
            ])
            ->add('seats', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'min' => 1]
            ])
            ->add('paymentMode', ChoiceType::class, [
                'choices' => [
                    'Cash' => 'cash',
                    'Credit Card' => 'credit_card',
                    'Mobile Payment' => 'mobile_payment'
                ],
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
