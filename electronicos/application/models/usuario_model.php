<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_model{

   function __construct(){
      parent::__construct();
      $this->load->library("mongodb");//libreria
      $this->db = $this->mongodb->db()->pedido;//nombre para la coleccion
      $this->dbp = $this->mongodb->db()->productos;
      $this->dbu = $this->mongodb->db()->usuario;//nombre para la coleccion

   }


   public function listarProducto(){
      return $this->dbp->find(array());
   }

   public function listarUsuario(){
      return $this->dbu->find(array());
   }

    public function guardar($datos){
      $resultado=$this->db->insertOne($datos);
         if ($resultado->getInsertedCount() > 0) {
            return array("guardado"=> true, "usuario_id"=>$resultado->getInsertedId());
         }else{
            return array("guardado"=> false);
         } 
      }

      public function resgistrar($datos){
         $resultado=$this->dbu->insertOne($datos);
            if ($resultado->getInsertedCount() > 0) {
               return array("guardado"=> true, "admin_id"=>$resultado->getInsertedId());
            }else{
               return array("guardado"=> false);
            } 
         } 

         public function verificarsesion($usuario,$clave){
            try {
                   $resultado=$this->dbu->findOne(array(
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