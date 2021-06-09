<?php 

class Invoice extends CI_Controller {
    
    public function index() {
        $data['reservation'] = $this->db->query("SELECT * FROM reservation r, hotel h, customer c WHERE r.id_hotel = h.id_hotel AND r.id_customer = '".$_SESSION['id_customer']."' LIMIT 1")->result();
        $this->load->view('customer/invoice',$data);
    }
}

?>