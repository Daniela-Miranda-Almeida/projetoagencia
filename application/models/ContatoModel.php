<?php

include_once APPPATH. 'libraries/Contact.php';

class ContatoModel extends CI_Model {

    public function cria() {

        if (sizeof($_POST) == 0) return;

        $this->form_validation->set_rules('contato[nome]', 'Nome', 'trim|required|min_length[2]|max_length[80]');
        $this->form_validation->set_rules('contato[email]', 'E-mail', 'trim|required|valid_email');
        $this->form_validation->set_rules('contato[assunto]', 'Assunto', 'trim|required');
        $this->form_validation->set_rules('contato[mensagem]', 'Mensagem', 'trim|required|min_length[3]|max_length[400]');

        if($this->form_validation->run()){

            $contato = $this->input->post('contato');
            $contact = new Contact();
            $contact->insertContact($contato);
            return true;  
               
        } else {
            return false;
        }

    }
}
