<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {
    
    function AjaxController(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('AjaxView');
	}

    function askData(){
        $params=$_POST['name'];
        echo "超级".$params;
    }
}
