<?php

namespace App\Form;

use App\Entity\Agent;
use App\Entity\Office;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;

class AgentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('email', null, [
                'constraints' => [
                    new Assert\Email([
                        'message' => 'Please enter a valid email address.',
                    ])
                ],
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Male' => 'male',
                    'Female' => 'female',
                    'Animal' => 'animal',
                ],
                'placeholder' => 'Choose a type',
            ])
            ->add('phone', null, [
                'constraints' => [
                    new Assert\Regex([
                        'pattern' => '/^\d{8}$/',
                        'message' => 'The phone number must be exactly 8 digits.',
                    ])
                ],
            ])
            ->add('birthdate', DateType::class, [
                'widget' => 'single_text',
                'constraints' => [
                    new LessThanOrEqual([
                        'value' => new \DateTime('2007-01-01'),
                        'message' => 'The Agent can not be less than 18.',
                    ])
                ],
            ])
            ->add('pictureP', FileType::class, [
                'label' => 'Profile Picture',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid JPEG or PNG image',
                    ])
                ],
            ])
            ->add('office', EntityType::class, [
                'class' => Office::class,
                'choice_label' => 'id',
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Agent::class,
        ]);
    }
}
