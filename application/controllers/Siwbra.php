<?php

class Siwbra extends MY_Controller {

    public function index() {

        $html = $this->load->view('agencia/navbar', null, true);
        $html .= $this->load->view('agencia/home/jumbotron', null, true);
        $html .= $this->load->view('agencia/home/apresentacao', null, true);
        $html .= $this->load->view('agencia/home/acessoinfo', null, true);
        $html .= $this->load->view('agencia/home/missao', null, true);
        $html .= $this->load->view('agencia/home/valores', null, true);
        $html .= $this->load->view('agencia/rodape', null, true);
        $this->show($html);
    }
}