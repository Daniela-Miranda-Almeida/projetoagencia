<?php

include_once APPPATH . 'libraries/Empresa_lib.php';
include_once APPPATH . 'libraries/component/Table.php';

class EmpresaModel extends CI_Model
{

    public function cria()
    {

        if (sizeof($_POST) == 0) return;

        $this->form_validation->set_rules('empresa[nome_empresa]', 'Nome', 'trim|required|min_length[2]|max_length[80]|ucwords');
        $this->form_validation->set_rules('empresa[cnpj_empresa]', 'CNPJ', 'trim|required|valid_cnpj');

        if ($this->form_validation->run()) {

            $empresa = $this->input->post('empresa');
            $empresa_lib = new Empresa_lib();

            if (is_numeric($id = $empresa_lib->insertEmpresa($empresa, true))) {
                redirect('empresa/'.$id);
              }
        } 
    }
}