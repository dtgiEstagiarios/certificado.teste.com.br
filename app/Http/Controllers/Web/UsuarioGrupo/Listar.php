<?php

namespace App\Http\Controllers\Web\UsuarioGrupo;

use App\Http\Controllers\Controller;
use App\Models\UsuarioGrupo\UsuarioGpPesquisa;
use App\Models\UsuarioGrupo\UsuarioGpDao;

class Listar extends Controller
{
    public function view() {
        $queryGpUsuario = new UsuarioGpPesquisa();
        $dataGpUsuario = $queryGpUsuario->pesquisa();
        $dataGpUsuarioDao = UsuarioGpDao::converterMuitos($dataGpUsuario);

        return view('sistema.usuarioGrupo.listar.view', [
            'dataGpUsuarioDao'=> $dataGpUsuarioDao
        ]);
    }
    
}
