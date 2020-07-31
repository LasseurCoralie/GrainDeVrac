<?php

namespace App\Form;

use App\Entity\City;
use App\Entity\Role;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class NewProducerdType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('name', null, [
                'label' => 'Nom'
            ])
            ->add('firstName', null, [
                'label' => 'Prenom'
            ])
            ->add('adress', null, [
                'label' => 'Adresse'
            ])
            ->add('country', null, [
                'label' => 'Pays'
            ])
            ->add('phone', null, [
                'label' => 'Telephone'
            ])
            ->add('mail')
            ->add('city', EntityType::class, [
                'class' => City::class,
                'choice_label' => 'name',
                'label' => 'Ville'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

    private function defaultEntity (){
        
    }
}
