<?php

namespace App\Form;

use App\Entity\PersonaEntityUpload;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PersonaUploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('correo', TextType::class)
            ->add('telefono', TextType::class)
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
        ])
        ->add('foto', FileType::class,['mapped'=>true]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'        =>PersonaEntityUpload::class,
            'csrf_protection'   =>true,
            'csrf_field_name'   =>'_token',
        ]);
    }
}
