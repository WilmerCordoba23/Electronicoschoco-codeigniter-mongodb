<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administrador extends CI_Controller{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    

public function __construct()
{
	parent::__construct();
	$this->load->library("mongodb");//libreria
    $this->db = $this->mongodb->db()->productos;//nombre para la coleccion 
	$this->load->model("administrador_model");
}


	public function admin (){
		$datos=array(
			"compra"=>$this->administrador_model->listarCompra()
		);
		$this->load->view('admin/index',$datos);
	} 


	public function agregar_productos (){
		$this->load->view('admin/productos/agregar/index');

	}

	public function guardar (){

		$config['upload_path']          = './assets/archivos/';
		$config['allowed_types']        = 'jpg|png';
		$config['file_name']= 'subida';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('imagen'))
		{
				//$error = array('error' => $this->upload->display_errors());
				//echo 'error';
				$this->session->set_userdata('error_image', true);
				redirect(base_url().'index.php/gestionar_productos/agregar');
		}
		else
		{
			$resultado= $this->administrador_model->guardar(
				$datosguardar = array(
    
					"nombre" => $this->input->post("nombre"),
					"descripcion" => $this->input->post("descripcion"),
					"precio" => $this->input->post("precio"),
					"cantidad" => $this->input->post("cantidad"),
					"categoria" => $this->input->post("categoria"),
					"imagen_producto" => $this->upload->data()["file_name"]
				) ,/* var_dump($this->upload->data())  */);

		
				
			if( $resultado['guardado']){
				redirect(base_url().'index.php/gestionar_productos/agregar');
			}

			if( $resultado['guardado']){
				echo 'Se guardo';
			}  

		}

		
		if ($this->administrador_model->guardar($_POST)==true) {
			redirect(base_url().'index.php/gestionar_productos/agregar');
		}
		
	}



	public function productos(){

		$datos=array(
			"productos"=>$this->administrador_model->listarProducto()
		);
		$this->load->view('admin/productos/index',$datos);
	}

	
	public function login(){

		$this->load->view('admin/login/index');
	}

	public function eliminar_compra($id){
		if ($this->administrador_model->eliminar_compra($id)==true) {
			redirect(base_url().'index.php/admin');
		}
	}

	public function eliminar_productos($id){
		if ($this->administrador_model->eliminar_productos($id)==true) {
			redirect(base_url().'index.php/gestionar_productos/productos');
		}
	}

}




