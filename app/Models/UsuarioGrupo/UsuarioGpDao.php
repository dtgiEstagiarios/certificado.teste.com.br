<?php
 
namespace App\Models\UsuarioGrupo;
 
use App\Models\Usuario\UsuarioGpClass;

class UsuarioDao 
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    public static function converter($data){
        return new UsuarioClass($data);
    }

    public static function converterMuitos($data){
        $usuario = [];
        foreach ($data as $dKey => $dValue) {
            $usuario[$dKey] = new UsuarioClass($dValue);
        }
        return $usuario;
    }
}