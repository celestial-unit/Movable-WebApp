<?php

namespace App\Form;

use App\Entity\EventRegistration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EventRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('registrationDate', TextType::class, [
                'label' => 'Registration Date',
                'required' => true,
                'attr' => [
                    'placeholder' => 'YYYY-MM-DD HH:MM:SS',
                    'class' => 'form-control'
                ],
                'error_bubbling' => false,
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Pending' => 'Pending',
                    'Confirmed' => 'Confirmed',
                    'Cancelled' => 'Cancelled',
                ],
                'label' => 'Status',
                'required' => true,
                'attr' => ['class' => 'form-control'],
                'error_bubbling' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EventRegistration::class,
            'attr' => ['novalidate' => 'novalidate'],
        ]);
    }
}