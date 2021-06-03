<?php 

class Home extends CI_Controller {
    
    public function index() {
        $data['hotel'] = $this->booking->get_data('hotel')->result();
        $this->load->view('templates_customer/header');
        $this->load->view('customer/home',$data);
        $this->load->view('templates_customer/footer');
    }
}

?>