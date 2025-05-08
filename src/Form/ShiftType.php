<?php
namespace App\Form;

use App\Entity\Shift;
use App\Entity\Driver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ShiftType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('driver', EntityType::class, [
                'class' => Driver::class,
                'choices' => $options['drivers'],
                'choice_label' => 'name',
                'placeholder' => 'Choose a driver',
                'required' => true,
            ])
            ->add('transport', TextType::class)
            ->add('startTime', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('endTime', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Shift Time',  // 👈 Changed label
                'choices' => [
                    'Morning' => 'Morning',
                    'Evening' => 'Evening',
                    'Night' => 'Night',
                ],
                'placeholder' => 'Select a shift type',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Shift::class,
        ]);
        $resolver->setDefined('drivers');
    }
}
