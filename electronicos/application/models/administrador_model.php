<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador_model extends CI_model{


    public function __construct()
    {
        parent::__construct();
        $this->load->library("mongodb");
        $this->dbpe = $this->mongodb->db()->pedido;//nombre para la coleccion
        $this->dbp = $this->mongodb->db()->productos;
		if(!$this->session->usuario){

			redirect(base_url().'index.php/login/admin');
		}
		
        $this->load->model("login_model");
    }

        public function listarProducto(){
            return $this->dbp->find(array());
        }

        
        public function listarCompra(){
            return $this->dbpe->find(array());
        }

    public function guardar( $datos){
         $resultado=$this->dbp->insertOne($datos);
         if ($resultado->getInsertedCount() > 0) {
           return array("guardado"=> true, "admin_id"=>$resultado->getInsertedId());
        }else{
           return array("guardado"=> false);
        }   
    }

    public function eliminar_compra($id){
        $resultado = $this->dbpe->deleteOne(array(
            "identificacion"=> $this->mongodb->getObjetId($id)
           ));
           return $resultado;

    }

    public function eliminar_productos($id){
        $resultado = $this->dbp->deleteOne(array(
            "_id"=> $this->mongodb->getObjetId($id)
           ));
        return $resultado;

    }


}