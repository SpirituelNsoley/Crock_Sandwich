<?php

namespace App\Form;

use App\Entity\Bread;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class BreadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('statement', ChoiceType::class, [
                'choices'  => [
                    "Actif" => 1,
                    "Inactif" => 0,    
                ]
            ]
            )         
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bread::class,
        ]);
    }
}
