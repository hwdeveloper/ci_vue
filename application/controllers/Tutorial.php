<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {
    
    function Tutorial(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('tutorial');
	}
}
