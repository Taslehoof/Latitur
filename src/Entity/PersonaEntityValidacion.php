<?php 
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PersonaEntityValidacion{

    #[Assert\NotBlank(message: 'El campo nombre es obligatorio')]
    protected $nombre;
    
    #[Assert\NotBlank(message: 'El campo E-mail es obligatorio'), Assert\Email(message: 'El E-mail {{ value }} no es un correo valido')]
    protected $correo;
    
    #[Assert\NotBlank(message: 'El campo Telefono es obligatorio')]
    protected $telefono;
    
    #[Assert\Positive(message: 'Debe seleccionar un pais')]
    protected $pais;


    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }


    public function getCorreo(): string{
        return $this->correo;
    }

    public function setCorreo(string $correo): void{
        $this->correo = $correo;
    }

    public function getTelefono(): string{
        return $this->telefono;
    }

    public function setTelefono(string $telefono): void{
        $this->telefono = $telefono;
    }

    public function getPais(): string{
        return $this->pais;
    }

    public function setPais(string $pais): void{
        $this->pais = $pais;
    }
}

?>
