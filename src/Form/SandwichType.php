<?php

namespace App\Form;

use App\Entity\Bread;
use App\Entity\Sandwich;
use App\Entity\Ingredient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SandwichType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('statement', ChoiceType::class, [
                'choices'  => [
                    'Actif' => 1,
                    'Inactif' => 0,
                  
                ]
            ])
            ->add('ingredient', EntityType::class, [
                'class' => Ingredient::class,
                'choice_label'=> 'name',
                'multiple'=> true,
            ])
            ->add('bread' , EntityType::class, [
                'class' => Bread::class,
                'choice_label'=> 'name',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sandwich::class,
        ]);
    }
}
