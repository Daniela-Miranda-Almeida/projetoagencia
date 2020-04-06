<?php

class Contact extends CI_Object {

    public function insertContact($contato) {
        $this->db->insert('agencia_contato', $contato);
        return $this->db->insert_id();
    }

    public function listContact() {
        $rs = $this->db->get('agencia_contato');
        return $rs->result_array();
    }

    public function deleteContact($id) {
        $delId = array('id' => $id);
        $this->db->delete('agencia_contato', $delId);
        
    }
}