<?php

namespace App\Entity;

use App\Repository\ProductoFotoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProductoFotoRepository::class)]
class ProductoFoto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100), Assert\File(
        maxSize: "10M",
        mimeTypes:[
            "image/jpeg",
            "image/jpg",
            "image/png",
        ],
        mimeTypesMessage:'La foto debe ser JPG|PNG',
        maxSizeMessage: 'La foto no debe pesar mas de 10 Megabytes'
    )]
    private ?string $foto = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Producto $producto = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): static
    {
        $this->foto = $foto;

        return $this;
    }

    public function getProducto(): ?Producto
    {
        return $this->producto;
    }

    public function setProducto(?Producto $producto): static
    {
        $this->producto = $producto;

        return $this;
    }
}
