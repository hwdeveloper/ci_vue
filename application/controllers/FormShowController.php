<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormShowController extends CI_Controller {
    
    function FormShowController(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{

        $name=$_POST['name'];

        $passwd=$_POST['passwd'];

        echo $name.":".$passwd;

	}
}
