<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form2Controller extends CI_Controller {


    
    function Form2Controller(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    
	public function index()
	{

      $name=  $_GET['name'];
        $passwd=$_GET['passwd'];

        echo $name.":".$passwd;

	}
	


}
