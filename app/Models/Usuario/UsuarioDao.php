<?php
 
namespace App\Models\Usuario;
 
use App\Models\Usuario\UsuarioClass;

class UsuarioDao 
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    public static function converter($data){
        return new UsuarioGpClass($data);
    }

    public static function converterMuitos($data){
        $usuario = [];
        foreach ($data as $dKey => $dValue) {
            $usuario[$dKey] = new UsuarioGpClass($dValue);
        }
        return $usuario;
    }
}