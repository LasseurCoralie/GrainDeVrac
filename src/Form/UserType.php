<?php

namespace App\Form;

use App\Entity\City;
use App\Entity\Role;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('firstName')
            ->add('adress')
            ->add('country')
            ->add('phone')
            ->add('mail')
            ->add('city', EntityType::class, [
                'class' => City::class,
                'choice_label' => 'name'
            ])
            ->add('role', EntityType::class, [
                'class' => Role::class,
                'choice_label' => 'role'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
