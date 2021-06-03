<?php 

class Booking extends CI_Model {
    public function get_data($table) {
        return $this->db->get($table);
    }

    public function insert_data($data,$table) {
        $this->db->insert($table,$data);
    }

    public function update_data($table,$data,$where) {
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_hotel($id) {
        $hasil = $this->db->where('id_hotel', $id)->get('hotel');
        if($hasil->num_rows() > 0) {
            return $hasil->result();
        }
        else {
            return false;
        }
    }
}


?>