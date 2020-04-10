<?php

class Empresa extends MY_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('EmpresaModel', 'model');
    }

    public function index() {
        $this->model->cria();
        $form['titulo'] = 'Informações da Empresa';
        $form['conteudo'] = $this->load->view('agencia/empresa/form_empresa', null, true);
        $form['conteudo'] .= $this->load->view('agencia/empresa/upload_empresa', null, true);
        $html = $this->load->view('agencia/empresa/form', $form, true);
        $this->show($html);
    }
}