<?php

#App seria el directorio src
namespace App\Utilidades;

#si yo quiero llamar a esta clase debo usar "use App\Utilidades\Utilidades

class Utilidades{

    //metodo statico
    public static function saludo(string $nombre){
        return "hola {$nombre}";
    }

    //metodo no statico
    public function saludo2(string $nombre){
        return "hola {$nombre}";
    }

}
