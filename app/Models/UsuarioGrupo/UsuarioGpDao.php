<?php
 
namespace App\Models\UsuarioGrupo;
 
use App\Models\UsuarioGrupo\UsuarioGpClass;

class UsuarioGpDao 
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