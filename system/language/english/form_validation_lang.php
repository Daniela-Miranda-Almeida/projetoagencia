<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

$lang['form_validation_required']        = 'O campo {field} é obrigatório.';
$lang['form_validation_isset']            = 'O campo {field} deve ter um valor.';
$lang['form_validation_valid_email']        = 'O campo {field} deve conter um endereço de email válido.';
$lang['form_validation_valid_emails']        = 'O campo {field} deve conter todos os endereços de email válidos.';
$lang['form_validation_valid_url']        = 'O campo {field} deve conter uma URL válida.';
$lang['form_validation_valid_ip']        = 'O campo {field} deve conter um IP válido.';
$lang['form_validation_valid_base64']        = 'The {field} field must contain a valid Base64 string.';
$lang['form_validation_min_length']        = 'O campo {field} deve ter pelo menos {param} caracteres.';
$lang['form_validation_max_length']        = 'O campo {field} não pode exceder {param} caracteres.';
$lang['form_validation_exact_length']        = 'O campo {field} deve ter exatamente {param} caracteres.';
$lang['form_validation_alpha']            = 'The {field} field may only contain alphabetical characters.';
$lang['form_validation_alpha_numeric']        = 'The {field} field may only contain alpha-numeric characters.';
$lang['form_validation_alpha_numeric_spaces']    = 'The {field} field may only contain alpha-numeric characters and spaces.';
$lang['form_validation_alpha_dash']        = 'The {field} field may only contain alpha-numeric characters, underscores, and dashes.';
$lang['form_validation_numeric']        = 'O campo Telefone do usuário deve conter apenas números.';
$lang['form_validation_is_numeric']        = 'The {field} field must contain only numeric characters.';
$lang['form_validation_integer']        = 'The {field} field must contain an integer.';
$lang['form_validation_regex_match']        = 'The {field} field is not in the correct format.';
$lang['form_validation_matches']        = 'O campo {field} não corresponde ao campo {param}.';
$lang['form_validation_differs']        = 'The {field} field must differ from the {param} field.';
$lang['form_validation_is_unique']         = 'The {field} field must contain a unique value.';
$lang['form_validation_is_natural']        = 'The {field} field must only contain digits.';
$lang['form_validation_is_natural_no_zero']    = 'The {field} field must only contain digits and must be greater than zero.';
$lang['form_validation_decimal']        = 'The {field} field must contain a decimal number.';
$lang['form_validation_less_than']        = 'The {field} field must contain a number less than {param}.';
$lang['form_validation_less_than_equal_to']    = 'The {field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']        = 'The {field} field must contain a number greater than {param}.';
$lang['form_validation_greater_than_equal_to']    = 'The {field} field must contain a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']    = 'Unable to access an error message corresponding to your field name {field}.';
$lang['form_validation_in_list']        = 'The {field} field must be one of: {param}.';
$lang['valid_cnpj'] = "O campo %s não e um CNPJ valido.";

/**
 * Verifica se o CNPJ é valido
 * @param     string
 * @return     bool
 */
function valid_cnpj($cnpj)
{
    //Etapa 1: Cria um array com apenas os digitos numéricos, isso permite receber o cnpj em diferentes formatos como "00.000.000/0000-00", "00000000000000", "00 000 000 0000 00" etc...
    $j = 0;
    for ($i = 0; $i < (strlen($cnpj)); $i++) {
        if (is_numeric($cnpj[$i])) {
            $num[$j] = $cnpj[$i];
            $j++;
        }
    }
    //Etapa 2: Conta os dígitos, um Cnpj válido possui 14 dígitos numéricos.
    if (count($num) != 14) {
        $isCnpjValid = false;
    }
    //Etapa 3: O número 00000000000 embora não seja um cnpj real resultaria um cnpj válido após o calculo dos dígitos verificares e por isso precisa ser filtradas nesta etapa.
    if ($num[0] == 0 && $num[1] == 0 && $num[2] == 0 && $num[3] == 0 && $num[4] == 0 && $num[5] == 0 && $num[6] == 0 && $num[7] == 0 && $num[8] == 0 && $num[9] == 0 && $num[10] == 0 && $num[11] == 0) {
        $isCnpjValid = false;
    }
    //Etapa 4: Calcula e compara o primeiro dígito verificador.
    else {
        $j = 5;
        for ($i = 0; $i < 4; $i++) {
            $multiplica[$i] = $num[$i] * $j;
            $j--;
        }
        $soma = array_sum($multiplica);
        $j = 9;
        for ($i = 4; $i < 12; $i++) {
            $multiplica[$i] = $num[$i] * $j;
            $j--;
        }
        $soma = array_sum($multiplica);
        $resto = $soma % 11;
        if ($resto < 2) {
            $dg = 0;
        } else {
            $dg = 11 - $resto;
        }
        if ($dg != $num[12]) {
            $isCnpjValid = false;
        }
    }
    //Etapa 5: Calcula e compara o segundo dígito verificador.
    if (!isset($isCnpjValid)) {
        $j = 6;
        for ($i = 0; $i < 5; $i++) {
            $multiplica[$i] = $num[$i] * $j;
            $j--;
        }
        $soma = array_sum($multiplica);
        $j = 9;
        for ($i = 5; $i < 13; $i++) {
            $multiplica[$i] = $num[$i] * $j;
            $j--;
        }
        $soma = array_sum($multiplica);
        $resto = $soma % 11;
        if ($resto < 2) {
            $dg = 0;
        } else {
            $dg = 11 - $resto;
        }
        if ($dg != $num[13]) {
            $isCnpjValid = false;
        } else {
            $isCnpjValid = true;
        }
    }
    //Trecho usado para depurar erros.
    /*
			if($isCnpjValid==true)
				{
					echo "<p><font color="GREEN">Cnpj é Válido</font></p>";
				}
			if($isCnpjValid==false)
				{
					echo "<p><font color="RED">Cnpj Inválido</font></p>";
				}
			*/
    //Etapa 6: Retorna o Resultado em um valor booleano.
    return $isCnpjValid;
}
