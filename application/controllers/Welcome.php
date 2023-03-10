<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Welcome_model'); //aqui cargamos nuetro modelo
		// include 
	}
	

	public function index()
	{
		$this->load->view('view_header');
		$this->load->view('welcome_message');
		$this->load->view('view_footer');
		
	}

	public function listar()
	{
		#print_r($this->Welcome_model->readData());
		$data['preregistros'] = $this->Welcome_model->readData();
		$this->load->view('view_header');
		$this->load->view('view_registro', $data);
		$this->load->view('view_footer');
	}

	public function ingresar(){
		$this->load->view('view_header');
		$this->load->view('view_login');
	}

	public function registrar(){
		#print_r($_POST);
		#var_dump($_POST);

		$datos = array(
			'nombre' => trim($this->input->post('nombre')),
			'apaterno' => trim($this->input->post('apaterno')),
			'amaterno' => trim($this->input->post('amaterno')),
			'correo' => trim($this->input->post('email')),
			'password' => md5(trim($this->input->post('pwd')))
			);


		$result = $this->Welcome_model->insert($datos);
		if ($result == TRUE) {
			# code...
			echo 'Registro Exitoso';
			redirect('Welcome/listar');
		}else{
			echo 'Contacta a soporte';
		}
	}


	public function actualizar($id)
	{
		$data['preregistro'] = $this->Welcome_model->fetch($id);
		$this->load->view('view_header');
		$this->load->view('view_editar', $data);
		$this->load->view('view_footer');
	}

	public function eliminar($id){
		$data['preregistro'] = $this->Welcome_model->delete($id);
		redirect('Welcome/listar');
	}

	public function update()
	{

		$datos = array(
			'nombre' => trim($this->input->post('nombre')),
			'apaterno' => trim($this->input->post('apaterno')),
			'amaterno' => trim($this->input->post('amaterno')),
			'correo' => trim($this->input->post('email')),
			'password' => md5(trim($this->input->post('pwd')))
			);

			$id = $this->input->post('id_preregistro');

		$result = $this->Welcome_model->update($id, $datos);
		if ($result == TRUE) {
			redirect('Welcome/listar');
		}else{
			echo 'Contacta a soporte';
		}
	}

	

}