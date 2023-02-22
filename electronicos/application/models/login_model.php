<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_model{
        public function __construct()
        {
            parent::__construct();
            $this->load->library("mongodb");//libreria
            $this->db = $this->mongodb->db()->admin;//nombre para la coleccion
        }
     public function verificarsesion($usuario,$clave){
        try {
               $resultado=$this->db->findOne(array(
                "usuario"=> $usuario,
                "clave"=>$clave
               ));
               return ($resultado);
               //errores 
        } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
              return null;
        }
}
}
//para guardar
/* public function guardar($datos){
    $resultado=$this->db->insertOne($datos);
       if ($resultado->getInsertedCount() > 0) {
          return array("guardado"=> true, "admin_id"=>$resultado->getInsertedId());
       }else{
          return array("guardado"=> false);
       } 
    } */