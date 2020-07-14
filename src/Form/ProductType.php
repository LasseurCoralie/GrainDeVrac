<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'label' => 'Titre'
            ])
            ->add('shortDescription', null, [
                'label' => 'Description courte'
            ])
            ->add('description', null, [
                'label' => 'Description'
            ])
            ->add('bio', ChoiceType::class , [
                'label' => "Bio ",
                'choices'  => [
                    'Non' => false,
                    'Oui' => true,
                ],
                'expanded' => true,
            ])
            ->add('price', null, [
                'label' => 'Prix'
            ])
            ->add('availability', ChoiceType::class, [
                'label' => 'Disponibilité',
                'choices'  => [
                    'Non' => false,
                    'Oui' => true,
                ],
                'expanded' => true,
            ])
            ->add('image')
            // ->add('higlighted')
            // ->add('producer')
            // ->add('recipe')
            // ->add('users')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
