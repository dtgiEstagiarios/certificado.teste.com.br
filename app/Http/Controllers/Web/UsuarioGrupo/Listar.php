<?php

namespace App\Http\Controllers\Web\UsuarioGrupo;

use App\Http\Controllers\Controller;
use App\Models\Usuario\UsuarioGpPesquisa;
use App\Models\Usuario\UsuarioGpDao;

class Listar extends Controller
{
    public function view() {
        $teste = 'aaaaa';

        return view('sistema.usuario.listar.view', [
            'teste'=>$teste
        ]);
    }
    
}
