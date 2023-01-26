<?php

class Practicas extends CI_Controller{
    function __construct{
        parent::__construct();
    }

    public function viewEjemplo(){
        // $this->load->view('view_header');
		$this->load->view('view_ejemplo');
		// $this->load->view('view_footer');
    }
}