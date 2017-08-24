<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {


    
    function Ajax(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    
	public function index()
	{
		$this->load->view('ajax');
	}
	
	function getAjaxData1(){


		$params=$_POST['name'];
		//$params=$this->uri->segment(2);



	//	$name = $this->config->item('name');
	    echo $params."小朋友";
	}


}
