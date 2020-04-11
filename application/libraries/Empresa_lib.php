<?php

class Empresa_lib extends CI_Object {

    public function insertEmpresa($empresa) {
        $this->db->insert('agencia_empresas', $empresa);
        return $this->db->insert_id();
    }
    public function insertEndereco($empresa) {
        $this->db->insert('endereco_empresa', $empresa);
        return $this->db->insert_id();
    }
}