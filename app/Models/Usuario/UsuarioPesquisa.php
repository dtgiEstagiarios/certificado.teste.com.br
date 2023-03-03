<?php
 
namespace App\Models\Usuario;
 
use App\Models\Usuario\UsuarioMain;
use Exception;
 
class UsuarioPesquisa extends UsuarioMain
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