<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form1Controller extends CI_Controller {



    function Form1Controller(){
        parent::__construct();
        $this->load->helper('url');
    }


	public function index()
	{
		$this->load->view('form1view');
	}
	


}
