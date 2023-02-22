<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class carrito extends CI_Model 
{

    function __construct()
    {
        parent::__construct();
        $this->load->library("mongodb");
        $this->db = $this->mongodb->db()->carrito;
    } 

   //insertar
        public function carrito1($informacion)
        {
            $result = $this->db->insertOne($informacion);
			return $result->getInsertedCount();
        }

        public function Traer_carrito(){

                try {
                    return $this->db->find();
        
                } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
                    return null;
                }

        }


        public function delete($id)
    {
        return $resultado = $this->db->deleteOne(
            array(
                '_id' => $this->mongodb->getObjetId($id)
            )
        );
    }

   
}