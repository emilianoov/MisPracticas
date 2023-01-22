<?php


Class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->load->view('view_login');
    }


    public function ingresar()
    {
        #print_r($_POST);
        $usuario =  trim($this->input->post('email'));
        $password = trim($this->input->post('pwd'));

        if ($this->verificarUsuario($usuario) == true)
        {
            $result = $this->Auth_model->selectUser($usuario, $password);
            if(!$result){
                echo 'El usuario y/o contraseña no coinciden';
            }else{
                print_r($result);
            }
        }else{
            echo 'El usuario no existe';
        }   
    }

    public function verificarUsuario($dato)
    {
        return $this->Auth_model->verificaExistencia($dato);
    }

    public function salir()
    {
        
    }

}