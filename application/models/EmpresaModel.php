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
                redirect('empresa/info/' . $id);
            }
        }
    }

    public function cria_info($id)
    {

        if (sizeof($_POST) == 0) return;

        $this->form_validation->set_rules('empresa[cep_empresa]', 'CEP', 'trim|required|max_length[8]|numeric');
        $this->form_validation->set_rules('empresa[numero_empresa]', 'Nº', 'trim|required|numeric');
        $this->form_validation->set_rules('empresa[empresa_rua]', 'Rua', 'trim|required|ucwords');
        $this->form_validation->set_rules('empresa[bairro_empresa]', 'Bairro', 'trim|required|ucwords');
        $this->form_validation->set_rules('empresa[municipio_empresa]', 'Cidade', 'trim|required|ucwords');
        $this->form_validation->set_rules('empresa[uf_empresa]', 'UF', 'trim|required|max_length[2]');
        $this->form_validation->set_rules('empresa[complemento]', 'Complemento', 'trim|max_length[80]');

        if ($this->form_validation->run()) {

            $empresa = $this->input->post('empresa');
            $empresa['id_empresa'] = $id; 
            $empresa_lib = new Empresa_lib();
            $empresa_lib->insertEndereco($empresa);
            return 'enviado';
        }
    }
}
