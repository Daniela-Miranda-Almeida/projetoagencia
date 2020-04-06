<?php

include_once APPPATH. 'libraries/Contact.php';
include_once APPPATH. 'libraries/component/Table.php';

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

    public function tabela_contato(){
        $contato = new Contact();
        $data = $contato->listContact();
        $label = ['#', 'Nome', 'E-mail','Assunto','Mensagem'];
        $table = new table($data, $label);
        
        $table->addHeaderClass('card-header black text-white border');
        $table->addNomeTable('Lista de Contato');
        $table->addIconTable('fas fa-envelope');
        $table->useActionButton2();        
        $table->addIdTable('dataTable');        
        $table->addUrlVisualizar('index.php/Contato');
        $table->addUrlDelete('index.php/Contato/delete');
        $table->useCard();
        $table->useBorder();
        $table->smallRow();
      
        
        return $table->getHTML();
    
      }

    public function deletaContato($id) {
        $contact = new Contact();
        $contact->deleteContact($id);
    }
}
