<?php

namespace LoginBundle\Form;

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
            ->add('name',TextType::class,array(
                'label'=> 'Nombre',
                'attr' => array('class'=>'form-control')
            ))
            ->add('surname', TextType::class,array(
                'label'=>'Apellido',
                'attr' => array('class'=>'form-control')
            ))
            ->add('email', EmailType::class,array(
                'label' => 'Email',
                'attr' => array('class'=>'form-control')
            ))
            ->add('username',TextType::class,array(
                'label'=>'Nombre de Usuario',
                'attr' => array('class'=>'form-control')
            ))
            ->add('password',PasswordType::class,array(
                'label' => 'Contraseña',
                'attr' => array('class'=>'form-control')
            ))
            ->add('Registrarte',SubmitType::class,array(
                'attr' => array('class'=>'btn btn-success mt-3')
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LoginBundle\Entity\users'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'loginbundle_users';
    }


}
