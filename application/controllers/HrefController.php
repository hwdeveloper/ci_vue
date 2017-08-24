<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HrefController extends CI_Controller {


    
    function HrefController(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    
	public function index()
	{

        $name= $params=$this->uri->segment(4);
        $passwd= $params=$this->uri->segment(6);

       // echo $name.":".$passwd;

        echo $name.":".$passwd;

	}
	


}
