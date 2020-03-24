<?php

class CalculadorModel extends CI_Model {
  
  public function result(){

    if (sizeof($_POST) == 0) return;

    $this->form_validation->set_rules('valor1', 'valor 1', 'trim|required');
    $this->form_validation->set_rules('valor2', 'valor 2', 'trim|required');

    if ($this->form_validation->run() === true) {
    
      $valor1 = $this->input->post('valor1');
      $valor2 = $this->input->post('valor2');
      $operacao = $this->input->post('operacao');

     switch ($operacao) {

         case "+":
           $resultado = $valor1." ". $operacao." ". $valor2. " = ".($valor1 + $valor2);
         break;
         case "-":
            $resultado = $valor1." ". $operacao." ". $valor2. " = ".($valor1 - $valor2);
         break;
         case "x":
            $resultado = $valor1." ". $operacao." ". $valor2. " = ".($valor1 * $valor2);
         break;
         case "/":
            $resultado = $valor1." ". $operacao." ". $valor2. " = ".($valor1 / $valor2);
         break;
         case "%":
            $resultado = $valor1." ". $operacao." de ". $valor2. " = ".($valor1 /100 ) * $valor2;
         break;
     }
       
     return($resultado);
    }
     
  } 
}
