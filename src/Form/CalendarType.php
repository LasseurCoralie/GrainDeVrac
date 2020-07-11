<?php

namespace App\Form;

use App\Entity\City;
use App\Entity\Mode;
use App\Entity\Date;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('startHour', TimeType::class, [
                'input'  => 'timestamp',
                'widget' => 'choice',
                'label' => 'Heure de départ (heure:minute)'
            ])
            ->add('endHour', TimeType::class, [
                'input'  => 'timestamp',
                'widget' => 'choice',
                'label' => 'Heure de fin (heure:minute)'
            ])
            ->add('city', EntityType::class, [
                'class' => City::class,
                'choice_label' => 'name',
                'label' => 'Ville'
            ])
            ->add('mode', EntityType::class, [
                'class' => Mode::class,
                'choice_label' => 'mode',
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
