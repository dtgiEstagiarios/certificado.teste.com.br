<?php
 
namespace App\Models\Usuario;
 
class UsuarioClass 
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
        $this->data['id'] = !empty($data['id_usuario']) ? $data['id_usuario'] : null;
    }

    private function setUuid($data){
        $this->data['uuid'] = !empty($data['uuid_usuario']) ? $data['uuid_usuario'] : null;
        
    }

    private function setName($data){
        $this->data['name'] = !empty($data['nm_usuario']) ? $data['nm_usuario'] : null;
        
    }

    private function setDesc($data){
        $this->data['desc'] = !empty($data['ds_usuario']) ? $data['ds_usuario'] : null;
        
    }

}