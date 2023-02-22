<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("mongodb");//libreria
        $this->db = $this->mongodb->db()->productos;//nombre para la coleccion
        $this->dbu = $this->mongodb->db()->usuario;//nombre para la coleccion

        $this->load->model("usuario_model");
        $this->load->model("carrito");
    }

	public function user (){

        $datos=array(
			"productos"=>$this->usuario_model->listarProducto()
		);
		$this->load->view('user/index',$datos);
        
	}

    public function verificar_compra (){
        $datosguardar = array(
            "nombres" => $this->input->post("nombres"),
             "apellidos" => $this->input->post("apellidos"),
             "telefono" => $this->input->post("telefono"),
             "identificacion" => $this->input->post("identificacion"),
              "correo" => $this->input->post("correo"),
             "ciudad" => $this->input->post("ciudad"),
              "direccion" => $this->input->post("direccion"),
              "pedido" => $this->input->post("pedido")
            );
        $resultado= $this->usuario_model->guardar($datosguardar);
        
        if ($resultado['guardado']) {
            redirect(base_url().'index.php/user');
        }
/*         var_dump($resultado); */

    }
    
    public function verificar (){
        $datos=array(
			"productos"=>$this->carrito->Traer_carrito()
		);
       /* var_dump($datos); */    
       $this->load->view('user/verificar/index',$datos);}
    
    public function categoria (){
        $datos=array(
			"productos"=>$this->usuario_model->listarProducto()
		);
         $this->load->view('user/categoria/index',$datos);
        
     }



     public function login(){

		$this->load->model("login_model");
		$this->load->view('user/login/index');
 		$this->session->set_userdata('error',false);
 		
	}

	public function registro(){

		$this->load->model("login_model");
		$this->load->view('user/login/registro/index');
 		$this->session->set_userdata('error',false);
 	
	}

	public function sesion(){
		$resultado=$this->usuario_model->verificarsesion(
			$this->input->post("usuario"),
			$this->input->post("clave")
		); 
		if ($resultado) {
			
			 $this->session->set_userdata('usuario',$resultado); 
			redirect(base_url().'index.php/user');
		}
		else{
			 $this->session->set_userdata('error',true); 
			redirect(base_url().'index.php/login/user');
		}
	}

	public function cerrar(){
    	$this->session->unset_userdata('usuario'); 
 		redirect(base_url().'index.php/login/admin');
	}

    

    public function registrar (){
        $datosguardar = array(
            "nombres" => $this->input->post("nombres"),
             "apellidos" => $this->input->post("apellidos"),
             "telefono" => $this->input->post("telefono"),
             "identificacion" => $this->input->post("identificacion"),
              "correo" => $this->input->post("correo"),
             "ciudad" => $this->input->post("ciudad"),
              "direccion" => $this->input->post("direccion"),
              "usuario" => $this->input->post("usuario"),
              "clave"=> $this->input->post("clave")
            );
            $resultado= $this->usuario_model->resgistrar($datosguardar);

        if ($resultado['guardado']) {
            redirect(base_url().'index.php/login/user');
        }
        }

        public function carro()
	{
		$data = array(
			'nombre' => $this->input->post("nombre"),
			'descripcion' => $this->input->post("descripcion"),
			'precio' => $this->input->post("precio"),
			'cantidad' => $this->input->post("cantidad"),
			'categoria' => $this->input->post("categoria"),
            'imagen' => $this->input->post("imagen"),
		);
        if ($this->carrito->carrito1($data) >= 1) {
			redirect(base_url().'index.php/user');
		} else {
			redirect(base_url().'index.php/user');
		}

	}

}