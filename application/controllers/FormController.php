<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {
    
    function FormController(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('FormView');
	}
}
