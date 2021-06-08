<?php 

class Reservation extends CI_Controller {

    public function index() {
        $data['reservation'] = $this->db->query("SELECT * FROM reservation r, hotel h, customer c WHERE r.id_hotel = h.id_hotel ORDER BY id_reservation")->result();
        $this->load->view('templates_admin/header');
        $this->load->view('admin/reservation',$data);
    }
}

?>