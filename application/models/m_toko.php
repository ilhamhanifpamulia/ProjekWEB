<?php
//database  
class m_toko extends CI_model {
    public function getAlltoko(){
        $query = $this->db->get('t_koi');
        return $query->result_array(); //buat nampilin objek array
    }
}