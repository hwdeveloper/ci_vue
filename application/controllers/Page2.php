<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page2 extends CI_Controller {
    
    function Page2(){
        parent::__construct();
    }
    
    


	public function index()
	{
		$this->load->view('page2');
	}
}
