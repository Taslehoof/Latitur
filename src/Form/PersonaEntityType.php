<?php

namespace App\Form;

use App\Entity\PersonaEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PersonaEntityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //De esta manera paso toda la logica del formulario hacia el Controlador 
            ->add('nombre', TextType::class,['label'=>'Nombre'])
            ->add('correo', TextType::class,['label'=>'E-Mail'])
            ->add('telefono', TextType::class,['label'=>'Telefono'])
            //Con esta opcion estoy haciendo un OptionSelect de los paises para poder pasarlo como valor
            ->add('pais', ChoiceType::class,[
                'choices'=>[
                    'Argentina'=>1,
                    'Francia'=>2,
                    'Chile'=>3,
                    'Mexico'=>4,
                    'Bolivia'=>5,
                    'Venezuela'=>6,
                    'Costa Rica'=>7,
                    'Peru'=>8
                ],'placeholder'=>'Seleccione....'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class'=>PersonaEntity::class,
            'csrf_protection'=>true,
            'csrf_field_name'=> '_token',
        ]);
    }
}
