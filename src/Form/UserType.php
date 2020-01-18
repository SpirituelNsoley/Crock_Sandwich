<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Profil;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('lastName')
            ->add('login')
            ->add('password')
            ->add('address')
            ->add('statement', ChoiceType::class, [
                'choices'  => [
                    "Actif" => 1,
                    "Inactif" => 0,    
                ]
            ])
            ->add('profil',  EntityType::class, [
                'class' => Profil::class,
                'choice_label'=> 'libelle',
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
