<?php

namespace App\Form\Destination;

use App\Entity\Destination\Destination;
use App\Entity\Destination\Parkingspot;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParkingspotType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isAccessible')
            ->add('isAvailable')
            ->add('spotNumber')
            ->add('parkingFees')
            ->add('size')
            ->add('notes')
            ->add('id', EntityType::class, [
                'class' => Destination::class,
                'choice_label' => 'id_',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Parkingspot::class,
        ]);
    }
}
