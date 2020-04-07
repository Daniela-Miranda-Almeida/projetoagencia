<?php

class Contato extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('ContatoModel','model');
    }

    public function index() {

        $html = $this->load->view('agencia/navbar', null, true);
        $data['valida'] =$this->model->cria();
        $html .= $this->load->view('agencia/contato/form',$data, true);
        $html .= $this->load->view('agencia/contato/localizacao', null, true);
        $html .= $this->load->view('agencia/rodape', null, true);

        $this->show($html);
    }

    public function lista() {
        $lista['tabela'] = $this->model->tabela_contato();
        $html = $this->load->view('common/table', $lista, true);
      
        $this->show($html);
    }

    public function visualizar($id) {
        $data['contato'] = $this->model->detalheContato($id);
        $html = $this->load->view('agencia/contato/detalhe', $data,true);

        $this->show($html);
    }

    public function delete($id) {
        $this->model->deletacontato($id);
        redirect('contato/lista');
    }

}