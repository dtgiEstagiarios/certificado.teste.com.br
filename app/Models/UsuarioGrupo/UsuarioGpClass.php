<?php
 
namespace App\Models\UsuarioGrupo;
 
class UsuarioGpClass 
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    private $data = [];

    public function __construct($data){
        $this->setId($data);
        $this->setUuid($data);
        $this->setName($data);
        $this->setDesc($data);
    }

    public function getId(){
        return $this->data['id'];        
    }
    
    public function getUuid(){
        return $this->data['uuid'];        
    }
    
    public function getName(){
        return strtoupper($this->data['name']);        
    }

    public function getDesc(){
        return $this->data['desc'];        
    }

    private function setId($data){
        $this->data['id'] = !empty($data['id_usuarioGrupo']) ? $data['id_usuarioGrupo'] : null;
    }

    private function setUuid($data){
        $this->data['uuid'] = !empty($data['uuid_usuarioGrupo']) ? $data['uuid_usuarioGrupo'] : null;
        
    }

    private function setName($data){
        $this->data['name'] = !empty($data['nm_usuarioGrupo']) ? $data['nm_usuarioGrupo'] : null;
        
    }

    private function setDesc($data){
        $this->data['desc'] = !empty($data['ds_usuarioGrupo']) ? $data['ds_usuarioGrupo'] : null;
        
    }

}