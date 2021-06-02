<?php 

class Home extends CI_Controller {
    
    public function index() {
        $this->load->view('templates_customer/header');
        $this->load->view('customer/home');
        $this->load->view('templates_customer/footer');
    }
}

?>