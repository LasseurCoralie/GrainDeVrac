<?php

namespace App\Form;

use App\Entity\DatasPage;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DataHomePageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        dump($builder);

        $builder
            ->add('content', null, [
                'label' => 'Modifier le contenu'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DatasPage::class,
        ]);
    }
}
