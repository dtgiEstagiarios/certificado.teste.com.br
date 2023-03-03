<?php
 
namespace App\Models\UsuarioGrupo;
 
use App\Models\UsuarioGrupo\UsuarioGpMain;
use Exception;
 
class UsuarioGpPesquisa extends UsuarioGpMain
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    private $select = null;
    private $query = null;

    function __construct() {
        $this->select = [
            $this->table.'.*'
        ];
    }
    public function pesquisa(){
        try {
            $this->query = $this->select($this->select)->get();
            return $this->query;
        } catch (Exception $e) {
            dd($e);
        }
    }
}