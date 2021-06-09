<?php 

class Profile extends CI_Controller {
    
    public function index() {
        $data['customer'] = $this->db->query("SELECT * FROM customer WHERE id_customer = '".$_SESSION['id_customer']."'")->result();
        $this->load->view('customer/profile',$data);
    }
}

?>