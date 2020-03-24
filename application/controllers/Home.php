<?php

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('CalculadorModel','model');
    }

    public function index() {

        $calc['resultado'] = $this->model->result();
        $html = $this->load->view('principal/calculadora', $calc, true);
        $this->show($html);
    }
}