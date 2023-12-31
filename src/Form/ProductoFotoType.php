<?php

namespace App\Form;

use App\Entity\ProductoFoto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProductoFotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //Formulario para las fotos
            ->add('foto', FileType::class, [
                'mapped' =>true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'        =>ProductoFoto::class,
            'csrf_protection'   =>true,
            'csrf_field_name'   =>'_token',
        ]);
    }
}
