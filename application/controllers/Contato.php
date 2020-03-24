<?php

class Contato extends MY_Controller {

    public function index() {

        $html = $this->load->view('agencia/navbar', null, true);
        
        $html .= $this->load->view('agencia/contato/form', null, true);
        $html .= $this->load->view('agencia/contato/localizacao', null, true);
        $html .= $this->load->view('agencia/rodape', null, true);

        $this->show($html);
    }

}