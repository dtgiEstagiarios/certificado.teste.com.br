<?php

namespace App\Http\Controllers\Web\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Usuario\UsuarioPesquisa;
use App\Models\Usuario\UsuarioDao;

class Listar extends Controller
{
    public function view() {
        $queryUsuario = new UsuarioPesquisa();
        $dataUsuario = $queryUsuario->pesquisa();
        $dataUsuarioDao = UsuarioDao::converterMuitos($dataUsuario);

        return view('sistema.usuario.listar.view', [
            'dataUsuario'=>$dataUsuario,
            'dataUsuarioDao'=>$dataUsuarioDao
        ]);
    }
    
}
