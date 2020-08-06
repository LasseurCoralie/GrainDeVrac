<?php

namespace App\Form;

use App\Entity\City;
use App\Entity\Date;
use App\Entity\Mode;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('startHour', TimeType::class, [
                'input'  => 'datetime',
                'widget' => 'choice',
                'label' => 'Heure de départ (heure:minute)'
            ])
            ->add('endHour', TimeType::class, [
                'input'  => 'datetime',
                'widget' => 'choice',
                'label' => 'Heure de fin (heure:minute)'
            ])
            ->add('city', EntityType::class, [
                'class' => City::class,
                'choice_label' => 'name',
                'label' => 'Ville',
            ])
            ->add('deliveryMode', EntityType::class, [
                'class' => Mode::class,
                'choice_label' => 'mode',
                'label' => 'Mode de livraison'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Date::class,
        ]);
    }
}
