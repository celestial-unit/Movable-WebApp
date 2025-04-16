<?php

namespace App\Form;

use App\Entity\EventRegistration;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isAdmin = $options['is_admin'] ?? false;

        // Configure registration_date field
        $builder->add('registration_date', DateTimeType::class, [
            'label' => 'Registration Date',
            'widget' => 'single_text',
            'html5' => true,
            'input' => 'datetime',
            'data' => new \DateTime(),
            'disabled' => true,
            'attr' => [
                'class' => 'form-control',
                'readonly' => true,
                'style' => 'background-color: #e9ecef;'
            ],
            'help' => 'Automatically set to current date and time'
        ]);
        // Status field configuration
        // Status field configuration
        if ($isAdmin) {
            // Admin users can fully edit status
            $builder->add('status', ChoiceType::class, [
                'choices' => [
                    'Pending' => 'Pending',
                    'Confirmed' => 'Confirmed',
                    'Cancelled' => 'Cancelled'
                ],
                'label' => 'Status',
                'required' => true,
                'attr' => ['class' => 'form-select']
            ]);
        } else {
            // For non-admin users, status is not editable
            // Use a disabled field that displays the current value
            $builder->add('status', ChoiceType::class, [
                'label' => 'Status',
                'required' => true,
                'disabled' => true,
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => true,
                    'style' => 'background-color: #e9ecef;'
                ],
                'help' => 'Status cannot be modified',
                'choices' => [
                    'Pending' => 'Pending',
                    'Confirmed' => 'Confirmed',
                    'Cancelled' => 'Cancelled'
                ]
            ]);
        }
        // Add user field for admin registrations only
        if ($isAdmin) {
            $builder->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'required' => false,
                'placeholder' => 'Select a user (optional)',
                'attr' => [
                    'class' => 'form-select'
                ]
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EventRegistration::class,
            'attr' => ['novalidate' => 'novalidate'],
            'is_admin' => false
        ]);

        $resolver->setAllowedTypes('is_admin', 'bool');
    }
}
