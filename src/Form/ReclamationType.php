<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class ReclamationType extends AbstractType
{
    private $authorizationChecker;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker = null)
    {
        $this->authorizationChecker = $authorizationChecker;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter claim title',
                ],
                'label' => 'Title',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a title for your claim',
                    ]),
                    new Length([
                        'min' => 3,
                        'max' => 255,
                        'minMessage' => 'Title should be at least {{ limit }} characters',
                        'maxMessage' => 'Title should not exceed {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 5,
                    'placeholder' => 'Provide details about your claim',
                ],
                'label' => 'Description',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please provide a description for your claim',
                    ]),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Description should be at least {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('category', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Category',
                'choices' => [
                    'General' => 'General',
                    'Technical' => 'Technical',
                    'Billing' => 'Billing',
                    'Service' => 'Service',
                    'Account' => 'Account',
                    'Other' => 'Other',
                ],
                'placeholder' => 'Select a category',
                'required' => true,
            ]);
            
        // Add status field only for admin users
        if ($this->authorizationChecker && $this->authorizationChecker->isGranted('ROLE_ADMIN')) {
            $builder->add('status', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-control',
                ],
                'label' => 'Status',
                'choices' => [
                    'Pending' => Reclamation::STATUS_PENDING,
                    'Resolved' => Reclamation::STATUS_RESOLVED,
                    'Rejected' => Reclamation::STATUS_REJECTED,
                ],
                'placeholder' => 'Select status',
                'required' => true,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
            'attr' => [
                'class' => 'reclamation-form needs-validation',
                'novalidate' => 'novalidate',
            ],
        ]);
    }
}

