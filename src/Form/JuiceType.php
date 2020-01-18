<?php

namespace App\Form;

use App\Entity\Juice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JuiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('statement', ChoiceType::class, [
                'choices'  => [
                    "Actif" => 1,
                    "Inactif" => 0,    
                ]
            ])
            ->add('price')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Juice::class,
        ]);
    }
}
