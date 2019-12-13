<?php

namespace LoginBundle\Form;

use LoginBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class usersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class, [
                'label'=> 'Nombre',
                'attr' => ['class'=>'form-control']
            ])
            ->add('surname', TextType::class, [
                'label'=>'Apellido',
                'attr' => ['class'=>'form-control']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['class'=>'form-control']
            ])
            ->add('username',TextType::class, [
                'label'=>'Nombre de Usuario',
                'attr' => ['class'=>'form-control']
            ])
            ->add('password',PasswordType::class, [
                'label' => 'Contraseña',
                'attr' => ['class'=>'form-control']
            ])
            ->add('notes',TextType::class, [
                'label' => 'Nota',
                'required' => false,
                'attr' => ['class'=>'form-control']
            ])
            ->add('Registrarte',SubmitType::class, [
                'attr' => ['class'=>'btn btn-success m-3']
            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csrf_protection' => false,
            'data_class' => User::class
        ]);
    }

}
