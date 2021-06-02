<?php 

class Reservation extends CI_Controller {
    
    public function index() {
        $this->load->view('customer/reservation');
    }
}

?>