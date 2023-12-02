<?php

namespace App\Form;

use App\Entity\PersonaEntityValidacion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PersonaValidationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class,['label'=>'Nombre'])
            ->add('correo', TextType::class,['label'=>'E-Mail'])
            ->add('telefono', TextType::class,['label'=>'Telefono'])
            ->add('pais', ChoiceType::class,[
                'choices'=>[
                    'seleccione....'=>0,
                    'Argentina'=>1,
                    'Francia'=>2,
                    'Chile'=>3,
                    'Mexico'=>4,
                    'Bolivia'=>5,
                    'Venezuela'=>6,
                    'Costa Rica'=>7,
                    'Peru'=>8
                ]
        ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class'=>PersonaEntityValidacion::class,
            'csrf_protection'=>true,
            'csrf_field_name'=> '_token',
        ]);
    }
}
