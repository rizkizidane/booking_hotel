<?php 

class Reservation extends CI_Controller {
    
    public function tambah_reservation($id) {
        $data['reservation'] = $this->booking->ambil_id_hotel($id);
        // $data['reservation'] = $this->db->query("SELECT nama_hotel FROM hotel h, reservation r WHERE h.id_hotel = r.id_hotel");
        $this->load->view('customer/tambah_reservation',$data);
    }

    public function tambah_reservation_aksi() {
        // $id_customer        = $this->session->userdata('id_customer');
        $id_hotel           = $this->input->post('id_hotel');
        $nama               = $this->input->post('nama');
        $no_telepon         = $this->input->post('no_telepon');
        $email              = $this->input->post('email');
        $jumlah_kamar       = $this->input->post('jumlah_kamar');
        $checkin            = $this->input->post('checkin');
        $checkout           = $this->input->post('checkout');
        $harga              = $this->input->post('harga');
        
        $data = array (
            // 'id_customer'       => $id_customer,
            'id_hotel'      => $id_hotel,
            'nama'          => $nama,
            'no_telepon'    => $no_telepon,
            'email'         => $email,
            'jumlah_kamar'  => $jumlah_kamar,
            'checkin'       => $checkin,
            'checkout'      => $checkout,
            'harga'         => $harga
        );

        $this->booking->insert_data($data,'reservation');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show ml-5 mr-5" role="alert">Peminjaman Berhasil!</div>');
        redirect('customer/home');
    }

    public function detail_reservation($id)
    {
        $data['detail'] = $this->booking->ambil_id_hotel($id);
        $this->load->view('customer/detail_reservation',$data);
    }
}

?>