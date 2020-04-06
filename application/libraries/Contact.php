<?php

class Contact extends CI_Object {

    public function insertContact($contato) {
        $this->db->insert('agencia_contato', $contato);
        return $this->db->insert_id();
    }
}