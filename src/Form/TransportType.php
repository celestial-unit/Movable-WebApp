<?php

namespace App\Form;

use App\Entity\Transport;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('type', TextType::class, [
            'label' => 'Transport Type',
            'required' => false,
            'attr' => [
                'placeholder' => 'Transport Type'
            ]
        ])
        ->add('capacity', IntegerType::class, [
            'label' => 'Capacity',
            'required' => false,
            'attr' => [
                'placeholder' => 'Capacity',
                'min' => 1
            ]
        ])
            ->add('disponibility', CheckboxType::class, [
                'required' => false,
                'label' => 'Available?'
            ])
            ->add('destination', TextType::class, [
                'required' => false,
                'attr' => ['placeholder' => 'Enter destination']
            ])
           ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transport::class,
        ]);
    }
}
