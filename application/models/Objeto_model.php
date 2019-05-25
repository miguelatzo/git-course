<?php

class Objeto_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function get_objetos($id = FALSE){
        if ($id === FALSE){
            $query = $this->db->get('objeto');
            return $query->result_array();
        }

        $query = $this->db->get_where('objeto', array('id' => $id));
        return $query->row_array();
    }
}