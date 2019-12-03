<?php

namespace EntradaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntradaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo',TextType::class,array(
                'label'=> 'Titulo',
                'attr' => array('class'=>'form-control')
            ))
            ->add('cuerpo',TextareaType::class,array(
                'label'=> 'Texto',
                'attr' => array('class'=>'form-control')
            ))
            ->add('Crear Entrada',SubmitType::class,array(
                'attr' => array('class'=>'btn btn-success mt-3')
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EntradaBundle\Entity\Entrada'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'entradabundle_entrada';
    }


}
