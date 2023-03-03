<?php
 
namespace App\Models\UsuarioGrupo;
 
use Illuminate\Database\Eloquent\Model;
 
class UsuarioGpMain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_grupousuario';
    protected $connection = 'teste';
}