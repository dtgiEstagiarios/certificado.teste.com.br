<?php
 
namespace App\Models\Usuario;
 
use Illuminate\Database\Eloquent\Model;
 
class UsuarioMain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tb_usuario';
    protected $connection = 'teste';
}