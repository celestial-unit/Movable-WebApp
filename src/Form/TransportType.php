<?php
namespace App\Form;

use App\Entity\Transport;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType; // Correct import for SubmitType
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransportType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Type of Transport',
                'choices' => [
                    'Bus' => 'Bus',
                    'Car' => 'Car',
                ],
                'placeholder' => 'Choose a type',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('capacity', IntegerType::class, [
                'label' => 'Capacity',
                'required' => false,
                'attr' => [
                    'min' => 1,
                    'class' => 'form-control'
                ]
            ])
            ->add('disponibility', CheckboxType::class, [
                'label' => 'Available?',
                'required' => false,
                'attr' => ['class' => 'form-check-input']
            ])
            ->add('destination', TextType::class, [
                'label' => 'Destination',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            // Add a submit button using the built-in SubmitType
            ->add('submit', SubmitType::class, [
                'label' => 'Add Transport',
                'attr' => ['class' => 'btn btn-primary']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transport::class,
        ]);
    }
}
