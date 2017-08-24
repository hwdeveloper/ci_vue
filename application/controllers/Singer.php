<?php 
class Singer extends CI_Controller{
    
    function Singer(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('SingerModel');
    }

     function index(){
         //$this->SingerModel->deleteSinger2();
         $data['singers'] = $this->SingerModel->getSinger();

         $this->load->view('singer',$data);

    }
}
?>