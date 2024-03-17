<?php

namespace App\Form;

use App\Entity\Producto;
use App\Entity\Categoria;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProductoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class)
            ->add('precio', TextType::class)
            ->add('stock', TextType::class)
            ->add('descripcion', TextareaType::class)
            //con esto le estoy especificando a la "categoria" que vaya a busca los datos a una Entidad
            ->add('categoria', EntityType::class, [
                //a que Entidad a la entidad Categoria
                'class'=>Categoria::class,
                //aca estoy haciendo una funcion anonima para que me traiga los que busque los datos dentro de la Entidad y los traiga
                'choice_label'=>function(Categoria $categoria)
                {
                    return $categoria->getNombre(); 
                },
                //le pongo el Placeholder para que tenga un valor por defecto
                'placeholder'=>'Seleccione....'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Producto::class,
        ]);
    }
}
